<?php

	$routes = array();
	$routes[] = array('serve', '/serve', 'main', 'serve');
	$routes[] = array('home', '/', 'main', 'index');
	$routes[] = array('debug', '/debug/:debug_id', 'main', 'debug');
	$routes[] = array('upgrade', '/upgrade', 'installation', 'upgrade');
	$routes[] = array('attach_link', '/attach/link/to/:target_type/:target_id', 'main', 'attachLink');
	$routes[] = array('remove_link', '/upload/remove/link/:link_id/from/other/:target_type/:target_id', 'main', 'removeLink');
	$routes[] = array('client_dashboard', '/clients/:client_id', 'main', 'clientdashboard');
	$routes[] = array('team_dashboard', '/teams/:team_id', 'main', 'teamdashboard');	
	$routes[] = array('dashboard', '/dashboard', 'main', 'dashboard');
	$routes[] = array('dashboard_save', '/dashboard/save/:target_type/:tid', 'main', 'dashboardSave');
	$routes[] = array('dashboard_view', '/dashboard/views', 'main', 'dashboardView');
	$routes[] = array('get_javascript', '/js/:js_file', 'main', 'index');
	$routes[] = array('switch_to_user', '/switch/to/user/:user_id', 'main', 'switchUser');
	$routes[] = array('switch_back_user', '/switch/back', 'main', 'switchUser');
	$routes[] = array('login', '/do/login', 'main', 'doLogin');
	$routes[] = array('login_page', '/login', 'main', 'login');
	$routes[] = array('login_section', '/login/section/:section/*', 'main', 'login');
	$routes[] = array('register', '/do/register', 'main', 'register');
	$routes[] = array('activate', '/activate/:user/:key', 'main', 'activate');
	$routes[] = array('reset_password', '/reset/password/:user/:reset_hash', 'main', 'reset');
	$routes[] = array('set_state', '/set/state/:state_id', 'main', 'setState');
	$routes[] = array('logout', '/logout', 'main', 'logout');
	$routes[] = array('hide_infobox', '/hide/infobox/:key', 'main', 'hideInfobox');
	$routes[] = array('getreportissuefields', '/reportissue/get/fields/for/project/:project_key', 'main', 'reportIssueGetFields');
	$routes[] = array('search_paginated', '/issues/paginated/*', 'search', 'findIssuesPaginated');
	$routes[] = array('search_add_filter', '/issues/add/filter/*', 'search', 'addFilter');
	$routes[] = array('search_save_column_settings', '/search/save/columnsettings', 'search', 'saveColumnSettings');
	$routes[] = array('my_teams_assigned_issues', '/issues/my/assigned/teams/*', 'search', 'findIssues', array('predefined_search' => TBGContext::PREDEFINED_SEARCH_TEAM_ASSIGNED_OPEN_ISSUES, 'search' => true));
	$routes[] = array('my_assigned_issues', '/issues/my/assigned/*', 'search', 'findIssues', array('predefined_search' => TBGContext::PREDEFINED_SEARCH_MY_ASSIGNED_OPEN_ISSUES, 'search' => true));
	$routes[] = array('my_reported_issues', '/issues/my/*', 'search', 'findIssues', array('predefined_search' => TBGContext::PREDEFINED_SEARCH_MY_REPORTED_ISSUES, 'search' => true));
	$routes[] = array('issues_bulk_update', '/issues/bulk', 'search', 'bulkUpdateIssues');
	$routes[] = array('get_temp_identifiable', '/get/temp/identifiable', 'main', 'getTempIdentifiable');
	$routes[] = array('search', '/issues/*', 'search', 'findIssues');
	
	$routes[] = array('quicksearch', '/quicksearch/*', 'search', 'findIssues', array('quicksearch' => true, 'issues_per_page' => 6));
	$routes[] = array('opensearch', '/opensearch.xml', 'search', 'opensearch', array('format' => 'xml'));
	$routes[] = array('about', '/about', 'main', 'about');
	$routes[] = array('list_projects', '/list/projects/:format', 'main', 'listProjects');
	$routes[] = array('list_issuetypes', '/list/issuetypes/:format', 'main', 'listIssuetypes');
	$routes[] = array('list_fieldvalues', '/list/fieldvalues/for/field/:field_key/:format/*', 'main', 'listFieldvalues');
	$routes[] = array('get_partial_for_backdrop', '/get/partials/:key/*', 'main', 'getBackdropPartial');
	$routes[] = array('issue_upload', '/upload/to/issue/:issue_id', 'main', 'upload', array('mode' => 'issue'));
	$routes[] = array('article_upload', '/upload/to/article/:article_name', 'main', 'upload', array('mode' => 'article'));
	$routes[] = array('showfile', '/files/show/:id', 'main', 'getFile', array('mode' => 'show'));
	$routes[] = array('downloadfile', '/files/download/:id', 'main', 'getFile', array('mode' => 'download'));
	$routes[] = array('issue_upload_status', '/upload/get/status/for/issue/:issue_id', 'main', 'getUploadStatus', array('mode' => 'issue'));
	$routes[] = array('article_upload_status', '/upload/get/status/for/article/:article_name', 'main', 'getUploadStatus', array('mode' => 'article'));
	$routes[] = array('issue_detach_file', '/upload/detach/file/:file_id/from/issue/:issue_id', 'main', 'detachFile', array('mode' => 'issue'));
	$routes[] = array('article_detach_file', '/upload/detach/file/:file_id/from/article/:article_name', 'main', 'detachFile', array('mode' => 'article'));
	$routes[] = array('issue_attach_link', '/update/attach/link/to/issue/:issue_id/*', 'main', 'attachLinkToIssue', array(), true);
	$routes[] = array('issue_vote', '/vote/for/issue/:issue_id/:vote', 'main', 'voteForIssue');
	$routes[] = array('issue_remove_link', '/upload/remove/link/:link_id/from/issue/:issue_id', 'main', 'removeLinkFromIssue');
	$routes[] = array('upload_status', '/upload/get/status/for/:mode', 'main', 'getUploadStatus');
	$routes[] = array('upload', '/upload/:mode', 'main', 'upload');
	$routes[] = array('account_change_password', '/account/change/password/*', 'main', 'accountChangePassword', array(), true);
	$routes[] = array('account_check_username', '/account/check/username', 'main', 'accountCheckUsername', array(), true);
	$routes[] = array('account_pick_username', '/account/pick/username/:selected_username', 'main', 'accountPickUsername', array(), true);
	$routes[] = array('account_remove_openid', '/account/remove/openid/:openid/:csrf_token', 'main', 'removeOpenIDIdentity', array(), true);
	$routes[] = array('account_confirm_scope', '/account/confirm/scope/:scope_id/:csrf_token', 'main', 'confirmScope', array(), true);
	$routes[] = array('account_remove_scope', '/account/remove/scope/:scope_id/:csrf_token', 'main', 'removeScope', array(), true);
	$routes[] = array('account_save_information', '/account/save/information/*', 'main', 'myAccount', array('mode' => 'information'), true);
	$routes[] = array('account_save_settings', '/account/save/settings/*', 'main', 'myAccount', array('mode' => 'settings'), true);
	$routes[] = array('account_save_module_settings', '/account/save/module/:target_module/settings/*', 'main', 'myAccount', array('mode' => 'module'), true);
	$routes[] = array('account', '/account/*', 'main', 'myAccount');
	$routes[] = array('toggle_friend', '/friends/:mode/:user_id', 'main', 'toggleFriend');
	$routes[] = array('configure', '/configure', 'configuration', 'index', array('section' => 0));
	$routes[] = array('configure_update_check', '/configure/check/updates', 'configuration', 'checkUpdates');
	$routes[] = array('configure_authentication', '/configure/authentication', 'configuration', 'configureAuthentication', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_AUTHENTICATION));
	$routes[] = array('configure_authentication_pt2', '/configure/authentication/save', 'configuration', 'saveAuthentication', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_AUTHENTICATION));
	$routes[] = array('configure_projects', '/configure/projects', 'configuration', 'configureProjects', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_projects_add_project', '/configure/projects/add/new', 'configuration', 'addProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_archive', '/configure/project/:project_id/archive', 'configuration', 'archiveProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_unarchive', '/configure/project/:project_id/unarchive', 'configuration', 'unarchiveProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_delete', '/configure/project/:project_id/delete', 'configuration', 'deleteProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_project_settings', '/configure/project/:project_id/settings', 'project', 'configureProjectSettings');
	$routes[] = array('configure_project_developers', '/configure/project/:project_id/developers', 'project', 'configureProjectDevelopers');
	$routes[] = array('configure_project_set_leadby', '/configure/project/:project_id/set/:field/*', 'project', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'project'));
	$routes[] = array('configure_project_get_updated_key', '/configure/project/:project_id/get/updated/key', 'project', 'getUpdatedProjectKey');
	$routes[] = array('configure_project_find_assignee', '/configure/project/:project_id/find/assignee/by/*', 'project', 'findAssignee');
	$routes[] = array('configure_project_add_assignee', '/configure/project/:project_id/add/:assignee_type/:assignee_id/*', 'project', 'assignToProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'user'));
	$routes[] = array('configure_project_remove_assignee', '/configure/project/:project_id/remove/assignee/:assignee_type/:assignee_id/*', 'project', 'unassignFromProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'user'));
	$routes[] = array('configure_projects_add_edition', '/configure/project/:project_id/add/edition', 'project', 'addEdition');
	$routes[] = array('configure_projects_add_component', '/configure/project/:project_id/add/component', 'project', 'addComponent');
	$routes[] = array('configure_projects_build', '/configure/project/:project_id/build', 'project', 'projectBuild');
	$routes[] = array('configure_projects_icons', '/configure/project/:project_id/icons', 'project', 'projectIcons');
	$routes[] = array('configure_projects_workflow', '/configure/project/:project_id/workflow', 'project', 'projectWorkflow');
	$routes[] = array('configure_projects_workflow_table', '/configure/project/:project_id/workflow/get/table', 'project', 'projectWorkflowTable');
	$routes[] = array('configure_build_action', '/configure/build/:build_id/do/:build_action', 'project', 'buildAction');
	$routes[] = array('configure_edition_set_leadby', '/configure/project/:project_id/edition/:edition_id/set/:field/*', 'project', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'edition'));
	$routes[] = array('configure_edition_add_build', '/configure/project/:project_id/edition/:edition_id/add/build', 'project', 'addBuild');
	$routes[] = array('configure_edition_add_component', '/configure/project/:project_id/edition/:edition_id/add/component/:component_id', 'project', 'editEditionComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'add'));
	$routes[] = array('configure_edition_remove_component', '/configure/project/:project_id/edition/:edition_id/remove/component/:component_id', 'project', 'editEditionComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'remove'));
	$routes[] = array('configure_update_component', '/configure/component/:component_id/update', 'project', 'editComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'update'));
	$routes[] = array('configure_component_set_assignedto', '/configure/project/:project_id/component/:component_id/set/:field/*', 'project', 'setItemLead', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'item_type' => 'component'));
	$routes[] = array('configure_delete_component', '/configure/component/:component_id/delete', 'project', 'editComponent', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'mode' => 'delete'));
	$routes[] = array('configure_delete_edition', '/configure/edition/:edition_id/delete', 'project', 'deleteEdition');
	$routes[] = array('configure_project_editions_components', '/configure/project/:project_id/editions_and_components', 'project', 'configureProjectEditionsAndComponents');
	$routes[] = array('configure_project_other', '/configure/project/:project_id/other', 'project', 'configureProjectOther');
	$routes[] = array('configure_project_updateother', '/configure/project/:project_id/update/other', 'project', 'configureProjectUpdateOther');
	$routes[] = array('configure_project_edition', '/configure/project/:project_id/edition/:edition_id', 'project', 'configureProjectEdition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'format' => 'json'));
	$routes[] = array('configure_project', '/configure/project/:project_id/hierarchy', 'project', 'configureProject', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS, 'format' => 'json'));
	$routes[] = array('configure_settings', '/configure/settings', 'configuration', 'settings', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_SETTINGS));
	$routes[] = array('configure_scopes', '/configure/scopes', 'configuration', 'scopes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_SCOPES));
	$routes[] = array('configure_scope', '/configure/scope/:id', 'configuration', 'scope', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_SCOPES));
	$routes[] = array('configure_workflow', '/configure/workflow', 'configuration', 'configureWorkflows', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_copy_workflow', '/configure/workflow/copy/workflow/:workflow_id', 'configuration', 'configureWorkflowSteps', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'copy_workflow', 'format' => 'json'));
	$routes[] = array('configure_workflow_delete_workflow', '/configure/workflow/delete/workflow/:workflow_id', 'configuration', 'configureWorkflowSteps', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_workflow', 'format' => 'json'));
	$routes[] = array('configure_workflow_schemes', '/configure/workflow/schemes', 'configuration', 'configureWorkflowSchemes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_copy_scheme', '/configure/workflow/copy/scheme/:scheme_id', 'configuration', 'configureWorkflowScheme', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'copy_scheme', 'format' => 'json'));
	$routes[] = array('configure_workflow_delete_scheme', '/configure/workflow/delete/scheme/:scheme_id', 'configuration', 'configureWorkflowScheme', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_scheme', 'format' => 'json'));
	$routes[] = array('configure_workflow_scheme', '/configure/workflow/scheme/:scheme_id', 'configuration', 'configureWorkflowScheme', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_steps', '/configure/workflow/:workflow_id/steps', 'configuration', 'configureWorkflowSteps', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_step', '/configure/workflow/:workflow_id/step/:step_id', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_add_transition', '/configure/workflow/:workflow_id/add/transition/to/step/:step_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'add'));
	$routes[] = array('configure_workflow_add_step', '/configure/workflow/:workflow_id/add/step', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'edit'));
	$routes[] = array('configure_workflow_delete_step_transitions', '/configure/workflow/:workflow_id/delete/all/outgoing/transitions/from/step/:step_id', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_outgoing_transitions'));
	$routes[] = array('configure_workflow_delete_transition', '/configure/workflow/:workflow_id/delete/transition/:transition_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete'));
	$routes[] = array('configure_workflow_delete_step', '/configure/workflow/:workflow_id/delete/step/:step_id', 'configuration', 'configureWorkflowStep', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete'));
	$routes[] = array('configure_workflow_transition', '/configure/workflow/:workflow_id/transition/:transition_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_workflow_transition_add_validation_rule', '/configure/workflow/:workflow_id/transition/:transition_id/add/:postorpre/validationrule', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'new_validation_rule'));
	$routes[] = array('configure_workflow_transition_update_validation_rule', '/configure/workflow/:workflow_id/transition/:transition_id/validationrule/:rule_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'update_validation_rule'));
	$routes[] = array('configure_workflow_transition_delete_validation_rule', '/configure/workflow/:workflow_id/transition/:transition_id/delete/validationrule/:rule_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_validation_rule'));
	$routes[] = array('configure_workflow_transition_add_action', '/configure/workflow/:workflow_id/transition/:transition_id/add/action', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'new_action'));
	$routes[] = array('configure_workflow_transition_update_action', '/configure/workflow/:workflow_id/transition/:transition_id/action/:action_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'update_action'));
	$routes[] = array('configure_workflow_transition_delete_action', '/configure/workflow/:workflow_id/transition/:transition_id/delete/action/:action_id', 'configuration', 'configureWorkflowTransition', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW, 'mode' => 'delete_action'));
	$routes[] = array('configure_workflow_workflows', '/configure/workflow/workflows', 'configuration', 'configureWorkflows', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_WORKFLOW));
	$routes[] = array('configure_files', '/configure/files', 'configuration', 'configureUploads', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_UPLOADS));
	$routes[] = array('configure_roles', '/configure/roles/*', 'configuration', 'configureRoles', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_role', '/configure/role/:role_id/:mode', 'configuration', 'configureRole');
	$routes[] = array('configure_permissions', '/configure/permissions', 'configuration', 'configurePermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_permissions_get_configurator', '/configure/permissions/get/configurator/*', 'configuration', 'getPermissionsConfigurator', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_permissions_get_permissions', '/configure/permissions/get/permissions/*', 'configuration', 'getPermissionsInfo', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('permissions_set_denied', '/configure/permissions/set/permission/denied/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'denied'));
	$routes[] = array('permissions_set_allowed', '/configure/permissions/set/permission/allowed/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'allowed'));
	$routes[] = array('permissions_set_unset', '/configure/permissions/unset/permission/for/:target_module/:key/:target_id/:target_type/:item_id/:template_mode', 'configuration', 'setPermission', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS, 'mode' => 'unset'));
	$routes[] = array('configure_import', '/configure/import', 'configuration', 'import', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_IMPORT));
	$routes[] = array('configure_project_milestone_action', '/configure/project/:project_id/milestone/:milestone_id/do/:milestone_action', 'configuration', 'milestoneAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PROJECTS));
	$routes[] = array('configure_issuetypes', '/configure/issuetypes', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES));
	$routes[] = array('configure_issuetypes_add', '/configure/issuefields/add/issuetype', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'add'));
	$routes[] = array('configure_issuetypes_delete', '/configure/issuefields/delete/issuetype/:id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'delete'));
	$routes[] = array('configure_issuetypes_getoptions_for_scheme', '/configure/issuetypes/get/options/for/:id/and/scheme/:scheme_id', 'configuration', 'configureIssuetypesGetOptionsForScheme', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES));
	$routes[] = array('configure_issuetypes_update_choices_for_scheme', '/configure/issuetypes/update/choices/for/:id/and/scheme/:scheme_id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'updatechoices'));
	$routes[] = array('configure_issuetypes_disable_issuetype_for_scheme', '/configure/issuetypes/disable/:id/for/scheme/:scheme_id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'toggletype', 'state' => 'disable'));
	$routes[] = array('configure_issuetypes_enable_issuetype_for_scheme', '/configure/issuetypes/enable/:id/for/scheme/:scheme_id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'toggletype', 'state' => 'enable'));
	$routes[] = array('configure_issuetypes_update_issuetype', '/configure/issuefields/update/issuetype/:id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'update'));
	$routes[] = array('configure_issuetypes_update_issuetype_for_scheme', '/configure/issuefields/update/issuetype/:id/for/scheme/:scheme_id', 'configuration', 'configureIssuetypesAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'update'));
	$routes[] = array('configure_issuetypes_schemes', '/configure/issuetypes/schemes', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'schemes'));
	$routes[] = array('configure_issuetypes_scheme', '/configure/issuetypes/scheme/:scheme_id', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'scheme'));
	$routes[] = array('configure_issuetypes_copy_scheme', '/configure/issuetypes/copy/scheme/:scheme_id', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'copy_scheme', 'format' => 'json'));
	$routes[] = array('configure_issuetypes_delete_scheme', '/configure/issuetypes/delete/scheme/:scheme_id', 'configuration', 'configureIssuetypes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUETYPES, 'mode' => 'delete_scheme', 'format' => 'json'));
	$routes[] = array('configure_issuefields', '/configure/issuefields', 'configuration', 'configureIssuefields', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_getoptions', '/configure/issuefields/get/options/for/:type', 'configuration', 'configureIssuefieldsGetOptions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_edit', '/configure/issuefields/edit/:type/:id', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'edit'));
	$routes[] = array('configure_issuefields_add', '/configure/issuefields/add/:type', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'add'));
	$routes[] = array('configure_issuefields_delete', '/configure/issuefields/delete/:type/:id', 'configuration', 'configureIssuefieldsAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'delete'));
	$routes[] = array('configure_issuefields_getpermissions', '/configure/issuefields/get/permissions/for/:type/:id', 'configuration', 'configureIssuefieldsGetPermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS));
	$routes[] = array('configure_issuefields_add_customtype', '/configure/issuefields/add/custom/type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'add'));
	$routes[] = array('configure_issuefields_update_customtype', '/configure/issuefields/update/custom/type/:type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'update'));
	$routes[] = array('configure_issuefields_delete_customtype', '/configure/issuefields/delete/custom/type/:type', 'configuration', 'configureIssuefieldsCustomTypeAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_ISSUEFIELDS, 'mode' => 'delete'));
	$routes[] = array('configure_users_find_user', '/configure/users/find/users/*', 'configuration', 'findUsers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_add_user', '/configure/users/add/user', 'configuration', 'addUser', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_edit_user_form', '/configure/users/edit/user/:user_id/form', 'configuration', 'getUserEditForm', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_add_group', '/configure/users/add/group', 'configuration', 'addGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'new'));
	$routes[] = array('configure_users_clone_group', '/configure/users/clone/group/:group_id', 'configuration', 'addGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'clone'));
	$routes[] = array('configure_users_delete_group', '/configure/users/delete/group/:group_id', 'configuration', 'deleteGroup', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_get_group_members', '/configure/users/get/members/in/group/:group_id', 'configuration', 'getGroupMembers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_add_team', '/configure/users/add/team', 'configuration', 'addTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'new'));
	$routes[] = array('configure_users_clone_team', '/configure/users/clone/team/:team_id', 'configuration', 'addTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'clone'));
	$routes[] = array('configure_users_delete_team', '/configure/users/delete/team/:team_id', 'configuration', 'deleteTeam', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_get_team_members', '/configure/users/get/members/in/team/:team_id', 'configuration', 'getTeamMembers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_add_client', '/configure/users/add/client', 'configuration', 'addClient', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'new'));
	$routes[] = array('configure_users_edit_client', '/configure/users/edit/client/:client_id', 'configuration', 'editClient', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json', 'mode' => 'edit'));
	$routes[] = array('configure_users_delete_client', '/configure/users/delete/client/:client_id', 'configuration', 'deleteClient', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_get_client_members', '/configure/users/get/members/in/client/:client_id', 'configuration', 'getClientMembers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS, 'format' => 'json'));
	$routes[] = array('configure_users_update_user', '/configure/users/update/user/:user_id', 'configuration', 'updateUser', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_update_user_scopes', '/configure/users/update/userscopes/:user_id', 'configuration', 'updateUserScopes', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users_delete_user', '/configure/users/delete/user/:user_id', 'configuration', 'deleteUser', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_users', '/configure/users/*', 'configuration', 'configureUsers', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_USERS));
	$routes[] = array('configure_modules', '/configure/modules', 'configuration', 'configureModules', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES));
	$routes[] = array('configure_disable_module', '/configure/modules/disable/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'disable'));
	$routes[] = array('configure_enable_module', '/configure/modules/enable/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'enable'));
	$routes[] = array('configure_uninstall_module', '/configure/modules/uninstall/:module_key', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'uninstall'));
	$routes[] = array('configure_install_module', '/configure/modules/install', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'install'));
	$routes[] = array('configure_update_module', '/configure/modules/update', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'update'));
	$routes[] = array('configure_upload_module', '/configure/modules/upload', 'configuration', 'moduleAction', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES, 'mode' => 'upload'));
	$routes[] = array('configure_module', '/configure/module/:config_module', 'configuration', 'configureModule', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_MODULES));
	$routes[] = array('configure_get_permissions', '/configure/permissions/:permissions_type/for/:permissions_target_type/:permissions_target', 'configuration', 'getPermissions', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_PERMISSIONS));
	$routes[] = array('configure_import_csv', '/configure/import/:type/from/csv', 'configuration', 'importCSV', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_IMPORT));
	$routes[] = array('configure_import_csv_get_ids', '/configure/import/csv/get/ids', 'configuration', 'getIDsForImportCSV', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_IMPORT));
	$routes[] = array('configure_do_import_csv', '/configure/do/import/:type/from/csv', 'configuration', 'doImportCSV', array('config_module' => 'core', 'section' => TBGSettings::CONFIGURATION_SECTION_IMPORT));
	$routes[] = array('comment_delete', '/comment/delete/:comment_id', 'main', 'deleteComment');
	$routes[] = array('comment_update', '/comment/update/:comment_id', 'main', 'updateComment');
	$routes[] = array('comment_add', '/comment/add/for/module/:comment_module/item/type/:comment_applies_type/id/:comment_applies_id', 'main', 'addComment');
	$routes[] = array('confirm_affected', '/issue/:issue_id/confirm/:affected_type/:affected_id', 'main', 'toggleaffectedconfirmed');
	$routes[] = array('remove_affected', '/issue/:issue_id/remove/:affected_type/:affected_id', 'main', 'removeaffected');
	$routes[] = array('status_affected', '/issue/:issue_id/set/:affected_type/:affected_id/status/:status_id', 'main', 'statusaffected');
	$routes[] = array('add_affected', '/project/:project_key/issue/:issue_id/add/affected', 'main', 'addaffected');
	$routes[] = array('move_issue', '/issue/:issue_id/move', 'main', 'moveIssue');
	$routes[] = array('captcha', '/captcha/*', 'main', 'captcha');
	$routes[] = array('publish', '/wiki', 'publish', 'showArticle', array('article_name' => 'MainPage'));
	$routes[] = array('publish_article_new', '/wiki/new', 'publish', 'editArticle', array('article_name' => 'NewArticle'));
	$routes[] = array('publish_article_revision', '/wiki/:article_name/revision/:revision', 'publish', 'showArticle');
	$routes[] = array('publish_article_edit', '/wiki/:article_name/edit', 'publish', 'editArticle');
	$routes[] = array('publish_article_permissions', '/wiki/:article_name/permissions', 'publish', 'articlePermissions');
	$routes[] = array('publish_article_attachments', '/wiki/:article_name/attachments', 'publish', 'articleAttachments');
	$routes[] = array('publish_article_delete', '/wiki/:article_name/delete', 'publish', 'deleteArticle');
	$routes[] = array('publish_article_save', '/wiki/savearticle', 'publish', 'saveArticle');
	$routes[] = array('publish_article_history', '/wiki/:article_name/history', 'publish', 'articleHistory', array('history_action' => 'list'));
	$routes[] = array('publish_article_diff', '/wiki/:article_name/diff', 'publish', 'articleHistory', array('history_action' => 'diff'));
	$routes[] = array('publish_article_restore', '/wiki/:article_name/revert/to/revision/:revision', 'publish', 'articleHistory', array('history_action' => 'revert'));
	$routes[] = array('publish_find_project_articles', '/wiki/:project_key/find/*', 'publish', 'findArticles');
	$routes[] = array('publish_find_articles', '/wiki/find/*', 'publish', 'findArticles');
	$routes[] = array('publish_article', '/wiki/:article_name', 'publish', 'showArticle');
	
	foreach ($routes as $route)
	{
		call_user_func_array(array(TBGContext::getRouting(), 'addRoute'), $route);
	}
