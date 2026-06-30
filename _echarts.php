<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/extension/dataTool.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts-gl/dist/echarts-gl.min.js"></script>

<script>
    // Initialize ECharts on the '3dChart' div
    const chartDom = document.getElementById('3dChart');
    const myChart = echarts.init(chartDom);

    // Initial data for the 3D bar chart
    const data3D = [
        // Format: [xIndex, yIndex, value]
        [0, 0, 150],
        [1, 0, 80],
        [2, 0, 120],
        [3, 0, 100],
        [4, 0, 200]
    ];

    const option = {
        tooltip: {},
        visualMap: {
            max: 250,
            inRange: {
                color: ['#65B581', '#FFCE34', '#FD665F']
            }
        },
        xAxis3D: {
            type: 'category',
            data: ['HS 1001', 'HS 0302', 'HS 8471', 'HS 6201', 'HS 8703']
        },
        yAxis3D: {
            type: 'category',
            data: ['Trade Volume']
        },
        zAxis3D: {
            type: 'value',
            min: 0
        },
        grid3D: {
            boxWidth: 200,
            boxDepth: 40,
            viewControl: {
                // Enable auto-rotation
                autoRotate: true,
                autoRotateSpeed: 10
            },
            light: {
                main: {
                    intensity: 1.2
                },
                ambient: {
                    intensity: 0.3
                }
            }
        },
        series: [
            {
                type: 'bar3D',
                data: data3D,
                shading: 'lambert',
                // Each bar is centered on the category axis
                barSize: 20,
                itemStyle: {
                    opacity: 0.9
                },
                emphasis: {
                    itemStyle: {
                        color: '#900'
                    }
                }
            }
        ]
    };

    myChart.setOption(option);

    // Simulate real-time updates every 1 second
    setInterval(() => {
        // Modify each bar's 'value' slightly at random
        const updatedData = data3D.map(item => {
            let newValue = item[2] + Math.round((Math.random() - 0.5) * 10);
            // Ensure value doesn't go below zero
            newValue = Math.max(newValue, 0);
            return [item[0], item[1], newValue];
        });

        // Update the series data
        option.series[0].data = updatedData;
        myChart.setOption(option);
    }, 1000);
</script>
