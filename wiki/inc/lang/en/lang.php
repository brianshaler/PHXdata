<?php
/**
 * english language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 * @author     Anika Henke <anika@selfthinker.org>
 * @author     Matthias Grimm <matthiasgrimm@users.sourceforge.net>
 */
$lang['encoding']   = 'utf-8';
$lang['direction']  = 'ltr';
$lang['doublequoteopening']  = '“';//&ldquo;
$lang['doublequoteclosing']  = '”';//&rdquo;
$lang['singlequoteopening']  = '‘';//&lsquo;
$lang['singlequoteclosing']  = '’';//&rsquo;
$lang['apostrophe']          = '’';//&rsquo;

$lang['btn_edit']   = 'Edit this page';
$lang['btn_source'] = 'Show pagesource';
$lang['btn_show']   = 'Show page';
$lang['btn_create'] = 'Create this page';
$lang['btn_search'] = 'Search';
$lang['btn_save']   = 'Save';
$lang['btn_preview']= 'Preview';
$lang['btn_top']    = 'Back to top';
$lang['btn_newer']  = '<< more recent';
$lang['btn_older']  = 'less recent >>';
$lang['btn_revs']   = 'Old revisions';
$lang['btn_recent'] = 'Recent changes';
$lang['btn_upload'] = 'Upload';
$lang['btn_cancel'] = 'Cancel';
$lang['btn_index']  = 'Sitemap';
$lang['btn_secedit']= 'Edit';
$lang['btn_login']  = 'Login';
$lang['btn_logout'] = 'Logout';
$lang['btn_admin']  = 'Admin';
$lang['btn_update'] = 'Update';
$lang['btn_delete'] = 'Delete';
$lang['btn_back']   = 'Back';
$lang['btn_backlink']    = "Backlinks";
$lang['btn_backtomedia'] = 'Back to Mediafile Selection';
$lang['btn_subscribe']   = 'Manage Subscriptions';
$lang['btn_profile']     = 'Update Profile';
$lang['btn_reset']       = 'Reset';
$lang['btn_resendpwd']   = 'Send new password';
$lang['btn_draft']    = 'Edit draft';
$lang['btn_recover']  = 'Recover draft';
$lang['btn_draftdel'] = 'Delete draft';
$lang['btn_revert'] = 'Restore';

$lang['loggedinas'] = 'Logged in as';
$lang['user']       = 'Username';
$lang['pass']       = 'Password';
$lang['newpass']    = 'New password';
$lang['oldpass']    = 'Confirm current password';
$lang['passchk']    = 'once again';
$lang['remember']   = 'Remember me';
$lang['fullname']   = 'Real name';
$lang['email']      = 'E-Mail';
$lang['register']   = 'Register';
$lang['profile']    = 'User Profile';
$lang['badlogin']   = 'Sorry, username or password was wrong.';
$lang['minoredit']  = 'Minor Changes';
$lang['draftdate']  = 'Draft autosaved on'; // full dformat date will be added
$lang['nosecedit']  = 'The page was changed in the meantime, section info was out of date loaded full page instead.';

$lang['regmissing'] = 'Sorry, you must fill in all fields.';
$lang['reguexists'] = 'Sorry, a user with this login already exists.';
$lang['regsuccess'] = 'The user has been created and the password was sent by email.';
$lang['regsuccess2']= 'The user has been created.';
$lang['regmailfail']= 'Looks like there was an error on sending the password mail. Please contact the admin!';
$lang['regbadmail'] = 'The given email address looks invalid - if you think this is an error, contact the admin';
$lang['regbadpass'] = 'The two given passwords are not identical, please try again.';
$lang['regpwmail']  = 'Your DokuWiki password';
$lang['reghere']    = 'You don\'t have an account yet? Just get one';

$lang['profna']       = 'This wiki does not support profile modification';
$lang['profnochange'] = 'No changes, nothing to do.';
$lang['profnoempty']  = 'An empty name or email address is not allowed.';
$lang['profchanged']  = 'User profile successfully updated.';

$lang['pwdforget'] = 'Forgotten your password? Get a new one';
$lang['resendna']  = 'This wiki does not support password resending.';
$lang['resendpwd'] = 'Send new password for';
$lang['resendpwdmissing'] = 'Sorry, you must fill in all fields.';
$lang['resendpwdnouser']  = 'Sorry, we can\'t find this user in our database.';
$lang['resendpwdbadauth'] = 'Sorry, this auth code is not valid. Make sure you used the complete confirmation link.';
$lang['resendpwdconfirm'] = 'A confirmation link has been sent by email.';
$lang['resendpwdsuccess'] = 'Your new password has been sent by email.';

$lang['license']   = 'Except where otherwise noted, content on this wiki is licensed under the following license:';
$lang['licenseok'] = 'Note: By editing this page you agree to license your content under the following license:';

$lang['searchmedia']  = 'Search file name:';
$lang['searchmedia_in']  = 'Search in %s';
$lang['txt_upload']   = 'Select file to upload';
$lang['txt_filename'] = 'Upload as (optional)';
$lang['txt_overwrt']  = 'Overwrite existing file';
$lang['lockedby']     = 'Currently locked by';
$lang['lockexpire']   = 'Lock expires at';
$lang['willexpire']   = 'Your lock for editing this page is about to expire in a minute.\nTo avoid conflicts use the preview button to reset the locktimer.';

$lang['js']['notsavedyet'] = "Unsaved changes will be lost.";
$lang['rssfailed']   = 'An error occurred while fetching this feed: ';
$lang['nothingfound']= 'Nothing was found.';

$lang['mediaselect'] = 'Media Files';
$lang['fileupload']  = 'Media File Upload';
$lang['uploadsucc']  = 'Upload successful';
$lang['uploadfail']  = 'Upload failed. Maybe wrong permissions?';
$lang['uploadwrong'] = 'Upload denied. This file extension is forbidden!';
$lang['uploadexist'] = 'File already exists. Nothing done.';
$lang['uploadbadcontent'] = 'The uploaded content did not match the %s file extension.';
$lang['uploadspam']  = 'The upload was blocked by the spam blacklist.';
$lang['uploadxss']   = 'The upload was blocked for possibly malicious content.';
$lang['uploadsize']  = 'The uploaded file was too big. (max. %s)';
$lang['deletesucc']  = 'The file "%s" has been deleted.';
$lang['deletefail']  = '"%s" couldn\'t be deleted - check permissions.';
$lang['mediainuse']  = 'The file "%s" hasn\'t been deleted - it is still in use.';
$lang['namespaces']  = 'Namespaces';
$lang['mediafiles']  = 'Available files in';
$lang['accessdenied'] = 'You are not allowed to view this page.';

$lang['js']['searchmedia']    = 'Search for files';
$lang['js']['keepopen']    = 'Keep window open on selection';
$lang['js']['hidedetails'] = 'Hide Details';
$lang['mediausage']  = 'Use the following syntax to reference this file:';
$lang['mediaview']   = 'View original file';
$lang['mediaroot']   = 'root';
$lang['mediaupload'] = 'Upload a file to the current namespace here. To create subnamespaces, prepend them to your "Upload as" filename separated by colons.';
$lang['mediaextchange'] = 'Filextension changed from .%s to .%s!';

$lang['js']['mediatitle']       = 'Link settings';
$lang['js']['mediadisplay']     = 'Link type';
$lang['js']['mediaalign']       = 'Alignment';
$lang['js']['mediasize']        = 'Image size';
$lang['js']['mediatarget']      = 'Link target';
$lang['js']['mediaclose']       = 'Close';
$lang['js']['mediainsert']      = 'Insert';
$lang['js']['mediadisplayimg']  = 'Show the image.';
$lang['js']['mediadisplaylnk']  = 'Show only the link.';
$lang['js']['mediasmall']       = 'Small version';
$lang['js']['mediamedium']      = 'Medium version';
$lang['js']['medialarge']       = 'Large version';
$lang['js']['mediaoriginal']    = 'Original version';
$lang['js']['medialnk']         = 'Link to detail page';
$lang['js']['mediadirect']      = 'Direct link to original';
$lang['js']['medianolnk']       = 'No link';
$lang['js']['medianolink']      = 'Do not link the image';
$lang['js']['medialeft']        = 'Align the image on the left.';
$lang['js']['mediaright']       = 'Align the image on the right.';
$lang['js']['mediacenter']      = 'Align the image in the middle.';
$lang['js']['medianoalign']     = 'Use no align.';

$lang['reference']   = 'References for';
$lang['ref_inuse']   = 'The file can\'t be deleted, because it\'s still used by the following pages:';
$lang['ref_hidden']  = 'Some references  are on pages you don\'t have permission to read';

$lang['hits']       = 'Hits';
$lang['quickhits']  = 'Matching pagenames';
$lang['toc']        = 'Table of Contents';
$lang['current']    = 'current';
$lang['yours']      = 'Your Version';
$lang['diff']       = 'Show differences to current revisions';
$lang['diff2']      = 'Show differences between selected revisions';
$lang['difflink']   = 'Link to this comparison view';
$lang['line']       = 'Line';
$lang['breadcrumb'] = 'Trace';
$lang['youarehere'] = 'You are here';
$lang['lastmod']    = 'Last modified';
$lang['by']         = 'by';
$lang['deleted']    = 'removed';
$lang['created']    = 'created';
$lang['restored']   = 'old revision restored';
$lang['external_edit'] = 'external edit';
$lang['summary']    = 'Edit summary';
$lang['noflash']    = 'The <a href="http://www.adobe.com/products/flashplayer/">Adobe Flash Plugin</a> is needed to display this content.';
$lang['download']   = 'Download Snippet';

$lang['mail_newpage']  = 'page added:';
$lang['mail_changed']  = 'page changed:';
$lang['mail_subscribe_list'] = 'pages changed in namespace:';
$lang['mail_new_user'] = 'new user:';
$lang['mail_upload']   = 'file uploaded:';

$lang['js']['nosmblinks'] = "Linking to Windows shares only works in Microsoft Internet Explorer.\nYou still can copy and paste the link.";

$lang['qb_bold']    = 'Bold Text';
$lang['qb_italic']  = 'Italic Text';
$lang['qb_underl']  = 'Underlined Text';
$lang['qb_code']    = 'Code Text';
$lang['qb_strike']  = 'Strike-through Text';
$lang['qb_h1']      = 'Level 1 Headline';
$lang['qb_h2']      = 'Level 2 Headline';
$lang['qb_h3']      = 'Level 3 Headline';
$lang['qb_h4']      = 'Level 4 Headline';
$lang['qb_h5']      = 'Level 5 Headline';

$lang['qb_h']       = 'Headline';
$lang['qb_hs']      = 'Select Headline';
$lang['qb_hplus']   = 'Higher Headline';
$lang['qb_hminus']  = 'Lower Headline';
$lang['qb_hequal']  = 'Same Level Headline';

$lang['qb_link']    = 'Internal Link';
$lang['qb_extlink'] = 'External Link';
$lang['qb_hr']      = 'Horizontal Rule';
$lang['qb_ol']      = 'Ordered List Item';
$lang['qb_ul']      = 'Unordered List Item';
$lang['qb_media']   = 'Add Images and other files';
$lang['qb_sig']     = 'Insert Signature';
$lang['qb_smileys'] = 'Smileys';
$lang['qb_chars']   = 'Special Chars';

$lang['upperns']       = 'jump to parent namespace';
$lang['js']['linkwiz'] = 'Link Wizard';
$lang['js']['linkto']  = 'Link to:';

$lang['js']['del_confirm']= 'Really delete selected item(s)?';
$lang['admin_register']= 'Add new user';

$lang['metaedit']    = 'Edit Metadata';
$lang['metasaveerr'] = 'Writing metadata failed';
$lang['metasaveok']  = 'Metadata saved';
$lang['img_backto']  = 'Back to';
$lang['img_title']   = 'Title';
$lang['img_caption'] = 'Caption';
$lang['img_date']    = 'Date';
$lang['img_fname']   = 'Filename';
$lang['img_fsize']   = 'Size';
$lang['img_artist']  = 'Photographer';
$lang['img_copyr']   = 'Copyright';
$lang['img_format']  = 'Format';
$lang['img_camera']  = 'Camera';
$lang['img_keywords']= 'Keywords';

$lang['subscr_subscribe_success']  = 'Added %s to subscription list for %s';
$lang['subscr_subscribe_error']    = 'Error adding %s to subscription list for %s';
$lang['subscr_subscribe_noaddress']= 'There is no address associated with your login, you cannot be added to the subscription list';
$lang['subscr_unsubscribe_success']= 'Removed %s from subscription list for %s';
$lang['subscr_unsubscribe_error']  = 'Error removing %s from subscription list for %s';
$lang['subscr_already_subscribed'] = '%s is already subscribed to %s';
$lang['subscr_not_subscribed']     = '%s is not subscribed to %s';
// Manage page for subscriptions
$lang['subscr_m_not_subscribed']   = 'You are currently not subscribed to the current page or namespace.';
$lang['subscr_m_new_header']       = 'Add subscription';
$lang['subscr_m_current_header']   = 'Current subscriptions';
$lang['subscr_m_unsubscribe']      = 'Unsubscribe';
$lang['subscr_m_subscribe']        = 'Subscribe';
$lang['subscr_m_receive']          = 'Receive';
$lang['subscr_style_every']        = 'email on every change';
$lang['subscr_style_digest']       = 'digest email of changes for each page (every %.2f days)';
$lang['subscr_style_list']         = 'list of changed pages since last email (every %.2f days)';


/* auth.class language support */
$lang['authmodfailed']   = 'Bad user authentication configuration. Please inform your Wiki Admin.';
$lang['authtempfail']    = 'User authentication is temporarily unavailable. If this situation persists, please inform your Wiki Admin.';

/* installer strings */
$lang['i_chooselang'] = 'Choose your language';
$lang['i_installer']  = 'DokuWiki Installer';
$lang['i_wikiname']   = 'Wiki Name';
$lang['i_enableacl']  = 'Enable ACL (recommended)';
$lang['i_superuser']  = 'Superuser';
$lang['i_problems']   = 'The installer found some problems, indicated below. You can not continue until you have fixed them.';
$lang['i_modified']   = 'For security reasons this script will only work with a new and unmodified Dokuwiki installation.
                         You should either re-extract the files from the downloaded package or consult the complete
                         <a href="http://dokuwiki.org/install">Dokuwiki installation instructions</a>';
$lang['i_funcna']     = 'PHP function <code>%s</code> is not available. Maybe your hosting provider disabled it for some reason?';
$lang['i_phpver']     = 'Your PHP version <code>%s</code> is lower than the needed <code>%s</code>. You need to upgrade your PHP install.';
$lang['i_permfail']   = '<code>%s</code> is not writable by DokuWiki. You need to fix the permission settings of this directory!';
$lang['i_confexists'] = '<code>%s</code> already exists';
$lang['i_writeerr']   = 'Unable to create <code>%s</code>. You will need to check directory/file permissions and create the file manually.';
$lang['i_badhash']    = 'unrecognised or modified dokuwiki.php (hash=<code>%s</code>)';
$lang['i_badval']     = '<code>%s</code> - illegal or empty value';
$lang['i_success']    = 'The configuration was finished successfully. You may delete the install.php file now. Continue to
                        <a href="doku.php">your new DokuWiki</a>.';
$lang['i_failure']    = 'Some errors occurred while writing the configuration files. You may need to fix them manually before
                         you can use <a href="doku.php">your new DokuWiki</a>.';
$lang['i_policy']     = 'Initial ACL policy';
$lang['i_pol0']       = 'Open Wiki (read, write, upload for everyone)';
$lang['i_pol1']       = 'Public Wiki (read for everyone, write and upload for registered users)';
$lang['i_pol2']       = 'Closed Wiki (read, write, upload for registered users only)';

$lang['i_retry']      = 'Retry';
$lang['i_license']    = 'Please choose the license you want to put your content under:';

$lang['mu_intro']     = 'Here you can upload multiple files at once. Click the browse button to add them to the queue. Press upload when done.';
$lang['js']['mu_btn'] = 'Upload multiple files at once';
$lang['mu_gridname']  = 'Filename';
$lang['mu_gridsize']  = 'Size';
$lang['mu_gridstat']  = 'Status';
$lang['mu_namespace'] = 'Namespace';
$lang['mu_browse']    = 'Browse';
$lang['mu_toobig']    = 'too big';
$lang['mu_ready']     = 'ready for upload';
$lang['mu_done']      = 'complete';
$lang['mu_fail']      = 'failed';
$lang['mu_authfail']  = 'session expired';
$lang['mu_progress']  = '@PCT@% uploaded';
$lang['mu_filetypes'] = 'Allowed Filetypes';
$lang['mu_info']      = 'files uploaded.';
$lang['mu_lasterr']   = 'Last error:';

$lang['recent_global'] = 'You\'re currently watching the changes inside the <b>%s</b> namespace. You can also <a href="%s">view the recent changes of the whole wiki</a>.';

$lang['years']   = '%d years ago';
$lang['months']  = '%d months ago';
$lang['weeks']   = '%d weeks ago';
$lang['days']    = '%d days ago';
$lang['hours']   = '%d hours ago';
$lang['minutes'] = '%d minutes ago';
$lang['seconds'] = '%d seconds ago';

$lang['wordblock'] = 'Your change was not saved because it contains blocked text (spam).';


//Setup VIM: ex: et ts=2 enc=utf-8 :
