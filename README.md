
# Activities for shared file downloads, visible to all admins

## Fork for future Nextcloud releases starting from version 28

This fork requires manual installation, because it's not officially listed in the app store of Nexctloud.

Creates activities (visible to any administrator) for downloads of files that were shared with other users or a group. This app is based on the [Download Activity](https://github.com/nextcloud/files_downloadactivity) app by Joas Schilling. The main difference between both apps is that this app reports the activities to all users with administrative rights while the app of Joas Schilling reports the activities only to the user who shared the file.

![Shared file was downloaded by user via the web interface](docs/screenshot.png)

The feature is controllable via the `A local shared file or folder was downloaded` setting on the personal page.

**Manual installation process of this fork:**

 - Download latest release from https://github.com/fbroen/files_trackdownloads/releases
 - If an older version is already active in the Nextcloud instance, deactivate it via the Nextcloud web GUI (top right user icon --> Apps)
 - Unpack the downloaded release with the "files_trackdownloads" folder in the "apps" folder in your Nextcloud instance. If this folder already exists (e.g. older version), delete it.
 - Activate the new version via the Web GUI of the Nextcloud instance (top right user icon --> Apps)
