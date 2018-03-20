<?php

return [
    'update' => 'Update',
    'save' => 'Save',
    'add' => 'Add',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'edit' => 'Edit',
    'upload' => 'Upload',
    'close' => 'Close',
    'remove' => 'Remove',
    'done' => 'Done',
    'verify' => 'Verify',
    'for' => 'for',
    'unknown' => 'I don\'t know',
    'load_more' => 'Load more',
    'loading' => 'Loading...',
    'with' => 'with',

    'markdown_description' => 'Want to format your text in a nice way? We support Markdown to add bold, italic, lists and more.',
    'markdown_link' => 'Read documentation',

    'header_settings_link' => 'Settings',
    'header_logout_link' => 'Logout',

    'main_nav_cta' => 'Add people',
    'main_nav_dashboard' => 'Dashboard',
    'main_nav_family' => 'Contacts',
    'main_nav_journal' => 'Journal',
    'main_nav_activities' => 'Activities',
    'main_nav_tasks' => 'Tasks',
    'main_nav_trash' => 'Trash',

    'footer_remarks' => 'Any remarks?',
    'footer_send_email' => 'Send me an email',
    'footer_privacy' => 'Privacy policy',
    'footer_release' => 'Release notes',
    'footer_newsletter' => 'Newsletter',
    'footer_source_code' => 'Contribute',
    'footer_version' => 'Version: :version',
    'footer_new_version' => 'A new version is available',

    'footer_modal_version_whats_new' => 'What\'s new',
    'footer_modal_version_release_away' => 'You are 1 release behind the latest version available. You should update your instance.|You are :number releases behind the latest version available. You should update your instance.',

    'breadcrumb_dashboard' => 'Dashboard',
    'breadcrumb_list_contacts' => 'List of people',
    'breadcrumb_journal' => 'Journal',
    'breadcrumb_settings' => 'Settings',
    'breadcrumb_settings_export' => 'Export',
    'breadcrumb_settings_users' => 'Users',
    'breadcrumb_settings_users_add' => 'Add a user',
    'breadcrumb_settings_subscriptions' => 'Subscription',
    'breadcrumb_settings_import' => 'Import',
    'breadcrumb_settings_import_report' => 'Import report',
    'breadcrumb_settings_import_upload' => 'Upload',
    'breadcrumb_settings_tags' => 'Tags',
    'breadcrumb_add_significant_other' => 'Add significant other',
    'breadcrumb_edit_significant_other' => 'Edit significant other',
    'breadcrumb_add_note' => 'Add a note',
    'breadcrumb_edit_note' => 'Edit a note',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'How did you meet',
    'breadcrumb_settings_personalization' => 'Personalization',
    'breadcrumb_settings_security' => 'Security',
    'breadcrumb_settings_security_2fa' => 'Two Factor Authentication',

    'gender_male' => 'Man',
    'gender_female' => 'Woman',
    'gender_none' => 'Rather not say',

    'error_title' => 'Whoops! Something went wrong.',
    'error_unauthorized' => 'You don\'t have the right to edit this resource.',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_partner' => 'significant other',
    'relationship_type_partner_female' => 'significant other',
    'relationship_type_partner_reverse' => 'significant other',
    'relationship_type_partner_reverse_female' => 'significant other',
    'relationship_type_partner_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_female_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_reverse_with_name' => ':name&#39;s significant other',
    'relationship_type_partner_reverse_female_with_name' => ':name&#39;s significant other',

    'relationship_type_spouse' => 'spouse',
    'relationship_type_spouse_female' => 'spouse',
    'relationship_type_spouse_reverse' => 'spouse',
    'relationship_type_spouse_reverse_female' => 'spouse',
    'relationship_type_spouse_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_female_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_reverse_with_name' => ':name&#39;s spouse',
    'relationship_type_spouse_reverse_female_with_name' => ':name&#39;s spouse',

    'relationship_type_date' => 'date',
    'relationship_type_date_female' => 'date',
    'relationship_type_date_reverse' => 'date',
    'relationship_type_date_reverse_female' => 'date',
    'relationship_type_date_with_name' => ':name&#39;s date',
    'relationship_type_date_female_with_name' => ':name&#39;s date',
    'relationship_type_date_reverse_with_name' => ':name&#39;s date',
    'relationship_type_date_reverse_female_with_name' => ':name&#39;s date',

    'relationship_type_lover' => 'lover',
    'relationship_type_lover_female' => 'lover',
    'relationship_type_lover_reverse' => 'lover',
    'relationship_type_lover_reverse_female' => 'lover',
    'relationship_type_lover_with_name' => ':name&#39;s lover',
    'relationship_type_lover_female_with_name' => ':name&#39;s lover',
    'relationship_type_lover_reverse_with_name' => ':name&#39;s lover',
    'relationship_type_lover_reverse_female_with_name' => ':name&#39;s lover',

    'relationship_type_inlovewith' => 'in love',
    'relationship_type_inlovewith_female' => 'in love',
    'relationship_type_inlovewith_reverse' => 'in love',
    'relationship_type_inlovewith_reverse_female' => 'in love',
    'relationship_type_inlovewith_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_female_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_reverse_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_reverse_female_with_name' => 'someone :name is in love with',

    'relationship_type_parent' => 'father',
    'relationship_type_parent_female' => 'mother',
    'relationship_type_parent_reverse' => 'son',
    'relationship_type_parent_reverse_female' => 'daughter',
    'relationship_type_parent_with_name' => ':name&#39;s father',
    'relationship_type_parent_female_with_name' => ':name&#39;s mother',
    'relationship_type_parent_reverse_with_name' => ':name&#39;s son',
    'relationship_type_parent_reverse_female_with_name' => ':name&#39;s daughter',

    'relationship_type_child' => 'son',
    'relationship_type_child_female' => 'daughter',
    'relationship_type_child_reverse' => 'father',
    'relationship_type_child_reverse_female' => 'mother',
    'relationship_type_child_with_name' => ':name&#39;s son',
    'relationship_type_child_female_with_name' => ':name&#39;s daughter',
    'relationship_type_child_reverse_with_name' => ':name&#39;s father',
    'relationship_type_child_reverse_female_with_name' => ':name&#39;s mother',

    'relationship_type_sibling' => 'brother',
    'relationship_type_sibling_female' => 'sister',
    'relationship_type_sibling_reverse' => 'brother',
    'relationship_type_sibling_reverse_female' => 'sister',
    'relationship_type_sibling_with_name' => ':name&#39;s brother',
    'relationship_type_sibling_female_with_name' => ':name&#39;s sister',
    'relationship_type_sibling_reverse_with_name' => ':name&#39;s brother',
    'relationship_type_sibling_reverse_female_with_name' => ':name&#39;s sister',

    'relationship_type_grandparent' => 'grand parent',
    'relationship_type_grandparent_female' => 'grand parent',
    'relationship_type_grandparent_reverse' => 'grand child',
    'relationship_type_grandparent_reverse_female' => 'grand child',
    'relationship_type_grandparent_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandparent_female_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandparent_reverse_with_name' => ':name&#39;s grand child',
    'relationship_type_grandparent_reverse_female_with_name' => ':name&#39;s grand child',

    'relationship_type_grandchild' => 'grand child',
    'relationship_type_grandchild_female' => 'grand child',
    'relationship_type_grandchild_reverse' => 'grand parent',
    'relationship_type_grandchild_reverse_female' => 'grand parent',
    'relationship_type_grandchild_with_name' => ':name&#39;s grand child',
    'relationship_type_grandchild_female_with_name' => ':name&#39;s grand child',
    'relationship_type_grandchild_reverse_with_name' => ':name&#39;s grand parent',
    'relationship_type_grandchild_reverse_female_with_name' => ':name&#39;s grand parent',

    'relationship_type_uncle' => 'uncle',
    'relationship_type_uncle_female' => 'aunt',
    'relationship_type_uncle_reverse' => 'nephew',
    'relationship_type_uncle_reverse_female' => 'niece',
    'relationship_type_uncle_with_name' => ':name&#39;s uncle',
    'relationship_type_uncle_female_with_name' => ':name&#39;s aunt',
    'relationship_type_uncle_reverse_with_name' => ':name&#39;s nephew',
    'relationship_type_uncle_reverse_female_with_name' => ':name&#39;s niece',

    'relationship_type_nephew' => 'nephew',
    'relationship_type_nephew_female' => 'niece',
    'relationship_type_nephew_reverse' => 'uncle',
    'relationship_type_nephew_reverse_female' => 'aunt',
    'relationship_type_nephew_with_name' => ':name&#39;s nephew',
    'relationship_type_nephew_female_with_name' => ':name&#39;s niece',
    'relationship_type_nephew_reverse_with_name' => ':name&#39;s uncle',
    'relationship_type_nephew_reverse_female_with_name' => ':name&#39;s aunt',

    'relationship_type_cousin' => 'cousin',
    'relationship_type_cousin_female' => 'cousin',
    'relationship_type_cousin_reverse' => 'cousin',
    'relationship_type_cousin_reverse_female' => 'cousin',
    'relationship_type_cousin_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_female_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_reverse_with_name' => ':name&#39;s cousin',
    'relationship_type_cousin_reverse_female_with_name' => ':name&#39;s cousin',

    'relationship_type_godfather' => 'godfather',
    'relationship_type_godfather_female' => 'godmother',
    'relationship_type_godfather_reverse' => 'godson',
    'relationship_type_godfather_reverse_female' => 'goddaughter',
    'relationship_type_godfather_with_name' => ':name&#39;s godfather',
    'relationship_type_godfather_female_with_name' => ':name&#39;s godmother',
    'relationship_type_godfather_reverse_with_name' => ':name&#39;s godson',
    'relationship_type_godfather_reverse_female_with_name' => ':name&#39;s goddaughter',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_reverse' => 'godfather',
    'relationship_type_godson_reverse_female' => 'godmother',
    'relationship_type_godson_with_name' => ':name&#39;s godson',
    'relationship_type_godson_female_with_name' => ':name&#39;s goddaughter',
    'relationship_type_godson_reverse_with_name' => ':name&#39;s godfather',
    'relationship_type_godson_reverse_female_with_name' => ':name&#39;s godmother',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_reverse' => 'godfather',
    'relationship_type_godson_reverse_female' => 'godmother',
    'relationship_type_godson_with_name' => ':name&#39;s godson',
    'relationship_type_godson_female_with_name' => ':name&#39;s goddaughter',
    'relationship_type_godson_reverse_with_name' => ':name&#39;s godfather',
    'relationship_type_godson_reverse_female_with_name' => ':name&#39;s godmother',

    'relationship_type_friend' => 'friend',
    'relationship_type_friend_female' => 'friend',
    'relationship_type_friend_reverse' => 'friend',
    'relationship_type_friend_reverse_female' => 'friend',
    'relationship_type_friend_with_name' => ':name&#39;s friend',
    'relationship_type_friend_female_with_name' => ':name&#39;s friend',
    'relationship_type_friend_reverse_with_name' => ':name&#39;s friend',
    'relationship_type_friend_reverse_female_with_name' => ':name&#39;s friend',

    'relationship_type_colleague' => 'colleague',
    'relationship_type_colleague_female' => 'colleague',
    'relationship_type_colleague_reverse' => 'colleague',
    'relationship_type_colleague_reverse_female' => 'colleague',
    'relationship_type_colleague_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_female_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_reverse_with_name' => ':name&#39;s colleague',
    'relationship_type_colleague_reverse_female_with_name' => ':name&#39;s colleague',

    'relationship_type_boss' => 'boss',
    'relationship_type_boss_female' => 'boss',
    'relationship_type_boss_reverse' => 'boss',
    'relationship_type_boss_reverse_female' => 'boss',
    'relationship_type_boss_with_name' => ':name&#39;s boss',
    'relationship_type_boss_female_with_name' => ':name&#39;s boss',
    'relationship_type_boss_reverse_with_name' => ':name&#39;s boss',
    'relationship_type_boss_reverse_female_with_name' => ':name&#39;s boss',
];
