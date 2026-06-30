# Website Redesign

Clean working copy for the Rudder Research & Data Analytics website.

## Private files not stored in Git

Create these directly in cPanel after deployment:

- `mail-config.php`, copied from `mail-config.example.php`
- `api/config.php`, copied from `api/config.example.php`

Do not commit real passwords, database credentials, backups, cache folders, or zip files.

## cPanel deployment

The `.cpanel.yml` file copies the top-level website files to:

`/home/rudderdatanalyti/public_html/`

Review that path in cPanel before pressing **Deploy HEAD Commit**.
