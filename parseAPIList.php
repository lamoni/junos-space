<?php require_once(__DIR__ . "/vendor/autoload.php");

use \Lamoni\JunosSpace\JunosSpace;

$apis = 'GET /api/space/application-management
	Accept:
		application/vnd.net.juniper.space.application-management+xml;version=2;q=0.02
		application/vnd.net.juniper.space.application-management+json;version=2;q=0.02

GET /api/space/application-management
	Accept:
		application/vnd.net.juniper.space.application-management+xml;version=3;q=0.03
		application/vnd.net.juniper.space.application-management+json;version=3;q=0.03

GET /api/space/application-management
	Accept:
		application/vnd.net.juniper.space.application-management+xml;version=1
		application/vnd.net.juniper.space.application-management+json;version=1

GET /api/space/application-management/applications
	Accept:
		application/vnd.net.juniper.space.application-management.applications+xml;version=3;q=0.03
		application/vnd.net.juniper.space.application-management.applications+json;version=3;q=0.03

GET /api/space/application-management/applications
	Accept:
		application/vnd.net.juniper.space.application-management.applications+xml;version=1
		application/vnd.net.juniper.space.application-management.applications+json;version=1

GET /api/space/application-management/applications/{$applicationID}
	Accept:
		application/vnd.net.juniper.space.application-management.application+json;version=3;q=0.03
		application/vnd.net.juniper.space.application-management.application+xml;version=3;q=0.03

GET /api/space/application-management/applications/{$applicationID}
	Accept:
		application/vnd.net.juniper.space.application-management.application+json;version=1
		application/vnd.net.juniper.space.application-management.application+xml;version=1

GET /api/space/application-management/applications/{$applicationID}/settings-config
	Accept:
		application/vnd.net.juniper.space.application-management.settings-config+json;version=2;q=.02
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=2;q=.02

PUT /api/space/application-management/applications/{$applicationID}/settings-config
	Accept:
		application/vnd.net.juniper.space.application-management.settings-config+json;version=2;q=.02
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=2;q=.02
	Content-Type:
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.application-management.settings-config+json;version=2;charset=UTF-8

GET /api/space/application-management/applications/{$applicationID}/settings-config
	Accept:
		application/vnd.net.juniper.space.application-management.settings-config+json;version=1;q=.01
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=1;q=.01

PUT /api/space/application-management/applications/{$applicationID}/settings-config
	Accept:
		application/vnd.net.juniper.space.application-management.settings-config+json;version=1;q=.01
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=1;q=.01
	Content-Type:
		application/vnd.net.juniper.space.application-management.settings-config+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.application-management.settings-config+json;version=1;charset=UTF-8

GET /api/space/application-management/platform
	Accept:
		application/vnd.net.juniper.space.application-management.platform+json;version=1
		application/vnd.net.juniper.space.application-management.platform+xml;version=1

GET /api/space/application-management/platform/settings
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings+xml;version=1
		application/vnd.net.juniper.space.application-management.platform.settings+json;version=1

GET /api/space/application-management/platform/settings/user
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.user+xml;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.user+json;version=1

PUT /api/space/application-management/platform/settings/user
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.user+xml;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.user+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.application-management.platform.settings.user+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.application-management.platform.settings.user+xml;version=1;charset=UTF-8

GET /api/space/application-management/platform/settings/device
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.device+json;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.device+xml;version=1

PUT /api/space/application-management/platform/settings/device
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.device+json;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.device+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.application-management.platform.settings.device+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.application-management.platform.settings.device+xml;version=1;charset=UTF-8

GET /api/space/application-management/platform/settings/password
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.password+xml;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.password+json;version=1

PUT /api/space/application-management/platform/settings/password
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.password+xml;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.password+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.application-management.platform.settings.password+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.application-management.platform.settings.password+json;version=1;charset=UTF-8

GET /api/space/application-management/platform/settings/audit-log
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+json;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+xml;version=1

PUT /api/space/application-management/platform/settings/audit-log
	Accept:
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+json;version=1
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.application-management.platform.settings.audit-log+json;version=1;charset=UTF-8

GET /api/space/application-management/platform/features
	Accept:
		application/vnd.net.juniper.space.application-management.features+xml;version=3;q=0.03
		application/vnd.net.juniper.space.application-management.features+json;version=3;q=0.03

GET /api/space/application-management/platform/features/{$applicationPlatformFeatureID}
	Accept:
		application/vnd.net.juniper.space.application-management.feature+xml;version=3;q=0.03
		application/vnd.net.juniper.space.application-management.feature+json;version=3;q=0.03

GET /api/space/audit-log-management
	Accept:
		application/vnd.net.juniper.space.audit-log-management+json;version=1
		application/vnd.net.juniper.space.audit-log-management+xml;version=1

GET /api/space/audit-log-management/audit-logs
	Accept:
		application/vnd.net.juniper.space.audit-log-management.audit-logs+json;version=1
		application/vnd.net.juniper.space.audit-log-management.audit-logs+xml;version=1

GET /api/space/audit-log-management/audit-logs/{$auditLogID}
	Accept:
		application/vnd.net.juniper.space.audit-log-management.audit-log+xml;version=1
		application/vnd.net.juniper.space.audit-log-management.audit-log+json;version=1

GET /api/space/domain-management/domains/{$domainID}
	Accept:
		application/vnd.net.juniper.space.domain-management.domain+xml;version=1;q=0.01
		application/vnd.net.juniper.space.domain-management.domain+json;version=1;q=0.01

PUT /api/space/domain-management/{$domainID}
	Accept:
		application/vnd.net.juniper.space.domain-management.domain+xml;version=1;q=0.01
		application/vnd.net.juniper.space.domain-management.domain+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.domain-management.domain+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.domain-management.domain+json;version=1;charset=UTF-8

GET /api/space/domain-management/{$domainID}/users
	Accept:
		application/vnd.net.juniper.space.domain-management.user-refs+json;version=1;q=0.01
		application/vnd.net.juniper.space.domain-management.user-refs+xml;version=1;q=0.01

POST /api/space/domain-management/{$domainID}/users
	Content-Type:
		application/vnd.net.juniper.space.domain-management.user-ref+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.domain-management.user-ref+json;version=1;charset=UTF-8

PUT /api/space/user-management/users/{$userID}
	Accept:
		application/vnd.net.juniper.space.user-management.user+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.user+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.user-management.user+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.user+xml;version=1;charset=UTF-8

DELETE /api/space/user-management/users/{$userID}

GET /api/space/user-management/users/{$userID}
	Accept:
		application/vnd.net.juniper.space.user-management.user+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.user+json;version=1;q=0.01

GET /api/space/user-management/roles/{$roleID}
	Accept:
		application/vnd.net.juniper.space.user-management.role+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.role+json;version=1;q=0.01

PUT /api/space/user-management/roles/{$roleID}
	Accept:
		application/vnd.net.juniper.space.user-management.role+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.role+json;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.user-management.role+json;version=3;charset=UTF-8
		application/vnd.net.juniper.space.user-management.role+xml;version=3;charset=UTF-8

DELETE /api/space/user-management/roles/{$roleID}

PATCH /api/space/user-management/roles/{$roleID}
	Accept:
		application/vnd.net.juniper.space.user-management.role+xml;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.user-management.role_patch+xml;version=3;charset=UTF-8

GET /api/space/user-management/roles/{$roleID}
	Accept:
		application/vnd.net.juniper.space.user-management.role+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.role+json;version=3;q=0.03

GET /api/space/user-management/capabilities/{$capabilityID}
	Accept:
		application/vnd.net.juniper.space.user-management.capability+json;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.capability+xml;version=1;q=0.01

GET /api/space/user-management/tasks/{$taskID}
	Accept:
		application/vnd.net.juniper.space.user-management.task+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.task+json;version=1;q=0.01

GET /api/space/user-management/roles/{$roleID}/tasks
	Accept:
		application/vnd.net.juniper.space.user-management.task-refs+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.task-refs+json;version=3;q=0.03

GET /api/space/user-management/roles/{$roleID}/tasks/{$taskID}
	Accept:
		application/vnd.net.juniper.space.user-management.task-ref+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.task-ref+json;version=3;q=0.03

POST /api/space/user-management/users/{$userID}/change-password
	Accept:
		application/vnd.net.juniper.space.user-management.change-password+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.change-password+xml;version=1;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.user-management.change-password+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.change-password+xml;version=1;charset=UTF-8

PUT /api/space/user-management/users/{$userID}/change-password
	Accept:
		application/vnd.net.juniper.space.user-management.password+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.password+json;version=1;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.user-management.password+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.password+json;version=1;charset=UTF-8

POST /api/space/user-management/users/{$userID}/change-password
	Accept:
		application/vnd.net.juniper.space.user-management.password+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.password+json;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.user-management.change-password-to-temp+json;version=3;charset=UTF-8
		application/vnd.net.juniper.space.user-management.change-password-to-temp+xml;version=3;charset=UTF-8

POST /api/space/domain-management/{$domainID}/profiles
	Content-Type:
		application/vnd.net.juniper.space.domain-management.profile-ref+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.domain-management.profile-ref+xml;version=2;charset=UTF-8

GET /api/space/domain-management/{$domainID}/profiles
	Accept:
		application/vnd.net.juniper.space.domain-management.profiles+xml;version=2;q=0.02
		application/vnd.net.juniper.space.domain-management.profiles+json;version=2;q=0.02

GET /api/space/config-file-management
	Accept:
		application/vnd.net.juniper.space.config-file-management+xml;version=1
		application/vnd.net.juniper.space.config-file-management+json;version=1

GET /api/space/config-file-management/config-files
	Accept:
		application/vnd.net.juniper.space.config-file-management.config-files+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-file-management.config-files+json;version=1;q=0.01

GET /api/space/config-file-management/config-files/{$configFileID}
	Accept:
		application/vnd.net.juniper.space.config-file-management.config-file+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-file-management.config-file+json;version=1;q=0.01

DELETE /api/space/config-file-management/config-files/{$configFileID}

GET /api/space/device-management/devices/{$deviceID}
	Accept:
		application/vnd.net.juniper.space.device-management.device+json;version=1
		application/vnd.net.juniper.space.device-management.device+xml;version=1

DELETE /api/space/device-management/devices/{$deviceID}
	Accept:
		application/vnd.net.juniper.space.device-management.device+json;version=1
		application/vnd.net.juniper.space.device-management.device+xml;version=1

GET /api/space/configuration-management/change-requests/{$changeRequestID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=1
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=1

PUT /api/space/configuration-management/change-requests/{$changeRequestID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=1
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=1;charset=UTF-8

GET /api/space/managed-domain/managed-elements/{$managedElementID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.managed-element+json;version=1;q=.01
		application/vnd.net.juniper.space.managed-domain.managed-element+xml;version=1;q=.01

GET /api/space/managed-domain/ptps/{$ptpID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.ptp+json;version=1
		application/vnd.net.juniper.space.managed-domain.ptp+xml;version=1

GET /api/space/managed-domain/ptps/{$ptpID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.ptp+json;version=3
		application/vnd.net.juniper.space.managed-domain.ptp+xml;version=3

GET /api/space/managed-domain/managed-elements/{$managedElementID}/equipment-holders
	Accept:
		application/vnd.net.juniper.space.managed-domain.equipment-holders+json;version=1
		application/vnd.net.juniper.space.managed-domain.equipment-holders+xml;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/equipment-holders/{$equipmentHolderID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.equipment-holder+json;version=3;q=.03
		application/vnd.net.juniper.space.managed-domain.equipment-holder+xml;version=3;q=.03

GET /api/space/managed-domain/managed-elements/{$managedElementID}/equipment-holders/{$equipmentHolderID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.equipment-holder+json;version=1;q=.01
		application/vnd.net.juniper.space.managed-domain.equipment-holder+xml;version=1;q=.01

GET /api/space/managed-domain/managed-elements/{$managedElementID}/equipment-holders/{$equipmentHolderID}
	Accept:
		application/vnd.net.juniper.space.managed-domain.equipment-holder+json;version=2;q=.02
		application/vnd.net.juniper.space.managed-domain.equipment-holder+xml;version=2;q=.02

GET /api/space/managed-domain/managed-elements/{$managedElementID}/multilayer-subnetworks
	Accept:
		application/vnd.net.juniper.space.managed-domain.multilayer-subnetworks+json;version=1
		application/vnd.net.juniper.space.managed-domain.multilayer-subnetworks+xml;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/routing-instances
	Accept:
		application/vnd.net.juniper.space.managed-domain.routing-instances+xml;version=1
		application/vnd.net.juniper.space.managed-domain.routing-instances+json;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/software-identities
	Accept:
		application/vnd.net.juniper.space.managed-domain.software-identities+xml;version=1
		application/vnd.net.juniper.space.managed-domain.software-identities+json;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/routing-options
	Accept:
		application/vnd.net.juniper.space.managed-domain.routing-options+json;version=1
		application/vnd.net.juniper.space.managed-domain.routing-options+xml;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/vlans
	Accept:
		application/vnd.net.juniper.space.managed-domain.vlans+xml;version=1
		application/vnd.net.juniper.space.managed-domain.vlans+json;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/routing-engines
	Accept:
		application/vnd.net.juniper.space.managed-domain.routing-engines+json;version=1
		application/vnd.net.juniper.space.managed-domain.routing-engines+xml;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/routing-engines/BUILTIN
	Accept:
		application/vnd.net.juniper.space.managed-domain.routing-engine+xml;version=1
		application/vnd.net.juniper.space.managed-domain.routing-engine+json;version=1

GET /api/space/managed-domain/managed-elements/{$managedElementID}/virtual-chassis
	Accept:
		application/vnd.net.juniper.space.managed-domain.virtual-chassis+json;version=1
		application/vnd.net.juniper.space.managed-domain.virtual-chassis+xml;version=1

GET /api/space/device-management/devices/{$deviceID}/configurations
	Accept:
		application/vnd.net.juniper.space.device-management.configurations+json;version=1
		application/vnd.net.juniper.space.device-management.configurations+xml;version=1

GET /api/space/device-management/devices/{$deviceID}/configurations/expanded
	Accept:
		application/vnd.net.juniper.space.device-management.expanded-configuration+json;version=2;q=.02
		application/vnd.net.juniper.space.device-management.expanded-configuration+xml;version=2;q=.02

GET /api/space/device-management/devices/{$deviceID}/configurations/expanded
	Accept:
		application/vnd.net.juniper.space.device-management.expanded-configuration+json;version=3;q=.02
		application/vnd.net.juniper.space.device-management.expanded-configuration+xml;version=3;q=.02

POST /api/space/device-management/devices/{$deviceID}/configurations/expanded
	Accept:
		application/vnd.net.juniper.space.device-management.expanded-configuration+json;version=3;q=.02
		application/vnd.net.juniper.space.device-management.expanded-configuration+xml;version=3;q=.02
	Content-Type:
		application/vnd.net.juniper.space.device-management.xpath+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.xpath+xml;version=1;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/configurations/expanded
	Accept:
		application/vnd.net.juniper.space.device-management.expanded-configuration+xml;version=1;q=.01
		application/vnd.net.juniper.space.device-management.expanded-configuration+json;version=1;q=.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.xpath+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.xpath+xml;version=1;charset=UTF-8

GET /api/space/device-management/devices/{$deviceID}/configurations/expanded
	Accept:
		application/vnd.net.juniper.space.device-management.expanded-configuration+xml;version=1;q=.01
		application/vnd.net.juniper.space.device-management.expanded-configuration+json;version=1;q=.01

POST /api/space/device-management/devices/{$deviceID}/configurations/expanded/match-content
	Accept:
		application/vnd.net.juniper.space.device-management.match-expanded-content+xml;version=2
		application/vnd.net.juniper.space.device-management.match-expanded-content+json;version=2
	Content-Type:
		application/vnd.net.juniper.space.device-management.match-expanded-content+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.device-management.match-expanded-content+json;version=2;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/configurations/expanded/match-content
	Accept:
		application/vnd.net.juniper.space.device-management.match-expanded-content+xml;version=1
		application/vnd.net.juniper.space.device-management.match-expanded-content+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.match-expanded-content+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.match-expanded-content+xml;version=1;charset=UTF-8

GET /api/space/device-management/devices/{$deviceID}/configurations/raw
	Accept:
		application/vnd.net.juniper.space.device-management.raw-configuration+json;version=2;q=.02
		application/vnd.net.juniper.space.device-management.raw-configuration+xml;version=2;q=.02

POST /api/space/device-management/devices/{$deviceID}/configurations/raw
	Accept:
		application/vnd.net.juniper.space.device-management.raw-configuration+json;version=3;q=.02
		application/vnd.net.juniper.space.device-management.raw-configuration+xml;version=3;q=.02
	Content-Type:
		application/vnd.net.juniper.space.device-management.xpath+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.xpath+xml;version=1;charset=UTF-8

GET /api/space/device-management/devices/{$deviceID}/configurations/raw
	Accept:
		application/vnd.net.juniper.space.device-management.raw-configuration+json;version=3;q=.02
		application/vnd.net.juniper.space.device-management.raw-configuration+xml;version=3;q=.02

POST /api/space/device-management/devices/{$deviceID}/configurations/raw
	Accept:
		application/vnd.net.juniper.space.device-management.raw-configuration+json;version=1;q=.01
		application/vnd.net.juniper.space.device-management.raw-configuration+xml;version=1;q=.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.xpath+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.xpath+xml;version=1;charset=UTF-8

GET /api/space/device-management/devices/{$deviceID}/configurations/raw
	Accept:
		application/vnd.net.juniper.space.device-management.raw-configuration+json;version=1;q=.01
		application/vnd.net.juniper.space.device-management.raw-configuration+xml;version=1;q=.01

POST /api/space/device-management/devices/{$deviceID}/configurations/raw/match-content
	Accept:
		application/vnd.net.juniper.space.device-management.match-raw-content+json;version=2
		application/vnd.net.juniper.space.device-management.match-raw-content+xml;version=2
	Content-Type:
		application/vnd.net.juniper.space.device-management.match-raw-content+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.device-management.match-raw-content+json;version=2;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/configurations/raw/match-content
	Accept:
		application/vnd.net.juniper.space.device-management.match-raw-content+xml;version=1
		application/vnd.net.juniper.space.device-management.match-raw-content+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.match-raw-content+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.match-raw-content+json;version=1;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/exec-rpc
	Accept:
		application/vnd.net.juniper.space.device-management.rpc+json;version=2
		application/vnd.net.juniper.space.device-management.rpc+xml;version=2
	Content-Type:
		application/vnd.net.juniper.space.device-management.rpc+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.device-management.rpc+xml;version=2;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/exec-rpc
	Accept:
		application/vnd.net.juniper.space.device-management.rpc+json;version=3
		application/vnd.net.juniper.space.device-management.rpc+xml;version=3
	Content-Type:
		application/vnd.net.juniper.space.device-management.rpc+xml;version=3;charset=UTF-8
		application/vnd.net.juniper.space.device-management.rpc+json;version=3;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/exec-rpc
	Accept:
		application/vnd.net.juniper.space.device-management.rpc+json;version=1
		application/vnd.net.juniper.space.device-management.rpc+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.rpc+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.rpc+json;version=1;charset=UTF-8

GET /api/space/config-file-management/config-files?filter=(deviceId eq {$deviceID})
	Accept:
		application/vnd.net.juniper.space.config-file-management.config-files+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-file-management.config-files+json;version=1;q=0.01

GET /api/space/config-file-management/config-files/{$configFileID}/config-file-versions/{$configFileVersion}
	Accept:
		application/vnd.net.juniper.space.config-file-management.config-file-version+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-file-management.config-file-version+json;version=1;q=0.01

GET /api/space/device-management/devices/{$deviceID}/associated-scripts
	Accept:
		application/vnd.net.juniper.space.device-management.view-associated-scripts+xml;version=2
		application/vnd.net.juniper.space.device-management.view-associated-scripts+json;version=2

GET /api/space/device-management/devices/{$deviceID}/associated-scripts
	Accept:
		application/vnd.net.juniper.space.device-management.associated-scripts+xml;version=1
		application/vnd.net.juniper.space.device-management.associated-scripts+json;version=1

GET /api/space/device-management/devices/{$deviceID}/associated-softwares
	Accept:
		application/vnd.net.juniper.space.device-management.associated-softwares+xml;version=7;q=0.01
		application/vnd.net.juniper.space.device-management.associated-softwares+json;version=7;q=0.01

POST /api/space/device-management/devices/{$deviceID}/activate-modeled-device
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.activate-modeled-device-space-init-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.activate-modeled-device-space-init-request+json;version=1;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/activate-modeled-device
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.activate-modeled-device-device-init-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.activate-modeled-device-device-init-request+json;version=1;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/clone
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.clone-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.clone-request+xml;version=1;charset=UTF-8

POST /api/space/device-management/devices/{$deviceID}/modify-device-target-ip
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modify-device-target-ip+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modify-device-target-ip+xml;version=1;charset=UTF-8

GET /api/space/device-management/devices/{$deviceID}/configlet
	Accept:
		application/vnd.net.juniper.space.device-management.configlet+json;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.configlet+xml;version=1;q=0.01

POST /api/space/config-file-management/versions-diff
	Accept:
		application/vnd.net.juniper.space.config-file-management.versions-diff+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-file-management.versions-diff+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-file-management.versions-diff+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-file-management.versions-diff+xml;version=1;charset=UTF-8

POST /api/space/config-file-management/exec-restore
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-file-management.exec-restore+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-file-management.exec-restore+json;version=1;charset=UTF-8

POST /api/space/config-file-management/exec-backup
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-file-management.exec-backup+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-file-management.exec-backup+xml;version=1;charset=UTF-8

GET /api/space/config-template-management
	Accept:
		application/vnd.net.juniper.space.config-template-management+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management+json;version=1;q=0.01

GET /api/space/config-template-management
	Accept:
		application/vnd.net.juniper.space.config-template-management+json;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management+xml;version=2;q=0.02

GET /api/space/config-template-management
	Accept:
		application/vnd.net.juniper.space.config-template-management+xml;version=3;q=0.03
		application/vnd.net.juniper.space.config-template-management+json;version=3;q=0.03

GET /api/space/config-template-management/config-templates
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-templates+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-templates+json;version=1;q=0.01

PATCH /api/space/config-template-management/config-templates
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.config-templates_patch+xml;version=1;charset=UTF-8

POST /api/space/config-template-management/config-templates
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;charset=UTF-8

POST /api/space/config-template-management/config-templates
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template-no-definition+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template-no-definition+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.config-template-no-definition+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.config-template-no-definition+xml;version=1;charset=UTF-8

PATCH /api/space/config-template-management/config-templates/{$configTemplateID}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.config-template_patch+xml;version=1;charset=UTF-8

GET /api/space/config-template-management/config-templates/{$configTemplateID}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;q=0.01

PUT /api/space/config-template-management/config-templates/{$configTemplateID}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=1;charset=UTF-8

DELETE /api/space/config-template-management/config-templates/{$configTemplateID}

GET /api/space/config-template-management/config-templates/{$configTemplateID}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template+xml;version=3;q=0.03
		application/vnd.net.juniper.space.config-template-management.config-template+json;version=3;q=0.03

GET /api/space/config-template-management/config-template-definitions/{$configTemplateDefinitionID}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template-definition+xml;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template-definition+json;version=1;q=0.01

GET /api/space/config-template-management/config-template-definitions/{$configTemplateDefinitionID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.configuration+xml;version=1;q=0.01

GET /api/space/config-template-management/config-templates/{$configTemplateID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.configuration+xml;version=1;q=0.01

GET /api/space/config-template-management/config-templates/{$configTemplateID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration-cli+xml;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.configuration-cli+json;version=2;q=0.02

GET /api/space/config-template-management/config-templates/{$configTemplateID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration-all+xml;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.configuration-all+json;version=2;q=0.02

GET /api/space/config-template-management/config-templates/{$configTemplateID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration-xml+json;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.configuration-xml+xml;version=2;q=0.02

POST /api/space/config-template-management/config-templates/{$configTemplateID}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.configuration-update-result+xml;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.configuration-update-result+json;version=2;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.configuration-cli-request+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.configuration-cli-request+json;version=2;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/exec-deploy
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+xml;version=1;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/exec-deploy
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+json;version=2;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/exec-undeploy
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-undeploy-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-undeploy-request+xml;version=1;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/exec-audit
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01

GET /api/space/config-template-management/config-templates/{$configTemplateID}/device-associations
	Accept:
		application/vnd.net.juniper.space.config-template-management.device-associations+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.device-associations+xml;version=1;q=0.01

POST /api/space/config-template-management/config-templates/{$configTemplateID}/exec-publish
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-publish-request+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-publish-request+xml;version=2;charset=UTF-8

GET /api/space/config-template-management/config-templates/{$configTemplateID}/versions
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template-versions+xml;version=3;q=0.03
		application/vnd.net.juniper.space.config-template-management.config-template-versions+json;version=3;q=0.03

POST /api/space/config-template-management/config-templates/{$configTemplateID}/versions
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.delete-config-template-versions-request+xml;version=3;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.delete-config-template-versions-request+json;version=3;charset=UTF-8

GET /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template-details+json;version=3;q=0.03
		application/vnd.net.juniper.space.config-template-management.config-template-details+xml;version=3;q=0.03

DELETE /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}

GET /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.template-config-cli+json;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.template-config-cli+xml;version=2;q=0.02

GET /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/configuration
	Accept:
		application/vnd.net.juniper.space.config-template-management.template-config-xml+json;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.template-config-xml+xml;version=2;q=0.02

POST /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/exec-deploy
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-deploy-request+json;version=2;charset=UTF-8

GET /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/device-associations
	Accept:
		application/vnd.net.juniper.space.config-template-management.device-associations+json;version=3;q=0.03
		application/vnd.net.juniper.space.config-template-management.device-associations+xml;version=3;q=0.03

POST /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/exec-publish
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.exec-publish-request+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.exec-publish-request+xml;version=2;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/exec-auditTemplate
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.audit-template-config-version-request+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.audit-template-config-version-request+json;version=2;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/versions/{$configTemplateVersion}/exec-compareConfig
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.compare-config-by-devices-request+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.compare-config-by-devices-request+json;version=2;charset=UTF-8

POST /api/space/config-template-management/config-templates/{$configTemplateID}/clone
	Accept:
		application/vnd.net.juniper.space.config-template-management.clone-template-response+json;version=2;q=0.02
		application/vnd.net.juniper.space.config-template-management.clone-template-response+xml;version=2;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.config-template-management.clone-template-request+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.config-template-management.clone-template-request+xml;version=2;charset=UTF-8

GET /api/space/config-template-management/config-template-definitions
	Accept:
		application/vnd.net.juniper.space.config-template-management.config-template-definitions+json;version=1;q=0.01
		application/vnd.net.juniper.space.config-template-management.config-template-definitions+xml;version=1;q=0.01

GET /api/space/configuration-management
	Accept:
		application/vnd.net.juniper.space.configuration-management+xml;version=1;q=0.01
		application/vnd.net.juniper.space.configuration-management+json;version=1;q=0.01

POST /api/space/configuration-management/change-requests
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=2;q=.02
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=2;q=.02
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=2;charset=UTF-8

POST /api/space/configuration-management/change-requests
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-requests+xml;version=2;q=.02
		application/vnd.net.juniper.space.configuration-management.change-requests+json;version=2;q=.02
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.change-requests+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.change-requests+xml;version=2;charset=UTF-8

POST /api/space/configuration-management/change-requests
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=.01
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.change-requests+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.change-requests+xml;version=2;charset=UTF-8

GET /api/space/configuration-management/change-requests
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-requests+json;version=1
		application/vnd.net.juniper.space.configuration-management.change-requests+xml;version=1

POST /api/space/configuration-management/change-requests
	Accept:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=1
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.change-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.change-request+xml;version=1;charset=UTF-8

POST /api/space/configuration-management/cli-configlets
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=2;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.cli-configlet+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet+json;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlets+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlets+xml;version=2;charset=UTF-8

POST /api/space/configuration-management/cli-configlets
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=1;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.cli-configlet+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet+xml;version=1;charset=UTF-8

GET /api/space/configuration-management/cli-configlets
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlets+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlets+xml;version=1;charset=UTF-8

PUT /api/space/configuration-management/cli-configlets/{$cliConfigletID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=2;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.cli-configlet+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet+json;version=2;charset=UTF-8

DELETE /api/space/configuration-management/cli-configlets/{$cliConfigletID}

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=2;charset=UTF-8

PUT /api/space/configuration-management/cli-configlets/{$cliConfigletID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=1;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.cli-configlet+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet+xml;version=1;charset=UTF-8

DELETE /api/space/configuration-management/cli-configlets/{$cliConfigletID}

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.view-cli-configlet+json;version=1;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-params
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-params+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-params+xml;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-params
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-params+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-params+json;version=1;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-params/{$cliConfigletParamID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-param+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-param+xml;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-params/{$cliConfigletParamID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-param+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-param+xml;version=1;charset=UTF-8

POST /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-prepopulate-params
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.apply-configlet+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.apply-configlet+json;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-pages+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-pages+json;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-pages+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-pages+json;version=1;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages/{$cliConfigletPagesID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+json;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages/{$cliConfigletPagesID}
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+json;version=1;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages/{$cliConfigletPagesID}/cli-text
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+json;version=2;charset=UTF-8

GET /api/space/configuration-management/cli-configlets/{$cliConfigletID}/cli-configlet-pages/{$cliConfigletPagesID}/cli-text
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-page+json;version=1;charset=UTF-8

POST /api/space/configuration-management/cli-configlets/{$cliConfigletID}/apply-configlet
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.apply-configlet+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.apply-configlet+json;version=2;charset=UTF-8

POST /api/space/configuration-management/cli-configlets/{$cliConfigletID}/apply-configlet
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.apply-configlet+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.apply-configlet+xml;version=1;charset=UTF-8

POST /api/space/configuration-management/cli-configlets/{$cliConfigletID}/apply-configlet
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.apply-configlet-request+xml;version=3;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.apply-configlet-request+json;version=3;charset=UTF-8

POST /api/space/configuration-management/cli-configlets/cli-configlets-by-context
	Accept:
		application/vnd.net.juniper.space.configuration-management.cli-configlets+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlets+xml;version=2;charset=UTF-8
	Content-Type:
		application/vnd.net.juniper.space.configuration-management.cli-configlet-by-context+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.configuration-management.cli-configlet-by-context+json;version=2;charset=UTF-8

GET /api/space/debuglog-management
	Accept:
		application/vnd.net.juniper.space.debuglog-management+xml;version=1
		application/vnd.net.juniper.space.debuglog-management+json;version=1

GET /api/space/debuglog-management/categories
	Accept:
		application/vnd.net.juniper.space.debuglog-management.categories+json;version=1
		application/vnd.net.juniper.space.debuglog-management.categories+xml;version=1

POST /api/space/debuglog-management/categories
	Accept:
		application/vnd.net.juniper.space.debuglog-management.category+xml;version=1
		application/vnd.net.juniper.space.debuglog-management.category+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.debuglog-management.category+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.debuglog-management.category+xml;version=1;charset=UTF-8

GET /api/space/device-management
	Accept:
		application/vnd.net.juniper.space.device-management+xml;version=4
		application/vnd.net.juniper.space.device-management+json;version=4

GET /api/space/device-management
	Accept:
		application/vnd.net.juniper.space.device-management+json;version=1
		application/vnd.net.juniper.space.device-management+xml;version=1

GET /api/space/device-management/devices
	Accept:
		application/vnd.net.juniper.space.device-management.devices+xml;version=1
		application/vnd.net.juniper.space.device-management.devices+json;version=1

POST /api/space/device-management/discover-devices
	Accept:
		application/vnd.net.juniper.space.device-management.discover-devices+xml;version=2
		application/vnd.net.juniper.space.device-management.discover-devices+json;version=2
	Content-Type:
		application/vnd.net.juniper.space.device-management.discover-devices+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.device-management.discover-devices+json;version=2;charset=UTF-8

POST /api/space/device-management/discover-devices
	Accept:
		application/vnd.net.juniper.space.device-management.discover-devices+xml;version=1
		application/vnd.net.juniper.space.device-management.discover-devices+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.discover-devices+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.discover-devices+json;version=1;charset=UTF-8

POST /api/space/device-management/devices/get-syslog-events
	Accept:
		application/vnd.net.juniper.space.device-management.get-syslog-events+xml;version=2
		application/vnd.net.juniper.space.device-management.get-syslog-events+json;version=2
	Content-Type:
		application/vnd.net.juniper.space.device-management.get-syslog-events+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.device-management.get-syslog-events+xml;version=2;charset=UTF-8

POST /api/space/device-management/devices/get-syslog-events
	Accept:
		application/vnd.net.juniper.space.device-management.get-syslog-events+json;version=1
		application/vnd.net.juniper.space.device-management.get-syslog-events+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.get-syslog-events+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.get-syslog-events+json;version=1;charset=UTF-8

GET /api/space/device-management/modeled-device-management
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management+json;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management+xml;version=1;q=0.01

GET /api/space/device-management/modeled-device-management/connection-profiles
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.connection-profiles+xml;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.connection-profiles+json;version=1;q=0.01

POST /api/space/device-management/modeled-device-management/create-connection-profile
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-static-response+xml;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-static-response+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-static-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-static-request+json;version=1;charset=UTF-8

POST /api/space/device-management/modeled-device-management/create-connection-profile
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-dhcp-response+json;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-dhcp-response+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-dhcp-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-dhcp-request+json;version=1;charset=UTF-8

POST /api/space/device-management/modeled-device-management/create-connection-profile
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoe-response+xml;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoe-response+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoe-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoe-request+json;version=1;charset=UTF-8

POST /api/space/device-management/modeled-device-management/create-connection-profile
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoa-response+json;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoa-response+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoa-request+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.create-connection-profile-pppoa-request+json;version=1;charset=UTF-8

POST /api/space/device-management/modeled-device-management/modeled-instances
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instance-activate-now+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instance-activate-now+xml;version=1;charset=UTF-8

POST /api/space/device-management/modeled-device-management/modeled-instances
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instance-activate-later+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instance-activate-later+json;version=1;charset=UTF-8

GET /api/space/device-management/modeled-device-management/modeled-instances
	Accept:
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instances+json;version=1;q=0.01
		application/vnd.net.juniper.space.device-management.modeled-device-management.modeled-instances+xml;version=1;q=0.01

POST /api/space/device-management/change-device-credentials
	Accept:
		application/vnd.net.juniper.space.device-management.change-credentials-request+xml;version=4
		application/vnd.net.juniper.space.device-management.change-credentials-request+json;version=4
	Content-Type:
		application/vnd.net.juniper.space.device-management.change-credentials-request+xml;version=4;charset=UTF-8
		application/vnd.net.juniper.space.device-management.change-credentials-request+json;version=4;charset=UTF-8

POST /api/space/device-management/subscribe-change-notifications
	Accept:
		application/vnd.net.juniper.space.device-management.subscribe-change-notifications+xml;version=1
		application/vnd.net.juniper.space.device-management.subscribe-change-notifications+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.device-management.subscribe-change-notifications+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.device-management.subscribe-change-notifications+xml;version=1;charset=UTF-8

GET /api/space/domain-management
	Accept:
		application/vnd.net.juniper.space.domain-management+json;version=1;q=0.01
		application/vnd.net.juniper.space.domain-management+xml;version=1;q=0.01

GET /api/space/domain-management
	Accept:
		application/vnd.net.juniper.space.domain-management+xml;version=2;q=0.02
		application/vnd.net.juniper.space.domain-management+json;version=2;q=0.02

GET /api/space/job-management
	Accept:
		application/vnd.net.juniper.space.job-management+json;version=2
		application/vnd.net.juniper.space.job-management+xml;version=2

GET /api/space/job-management
	Accept:
		application/vnd.net.juniper.space.job-management+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management+xml;version=1;q=0.01

GET /api/space/job-management
	Accept:
		application/vnd.net.juniper.space.job-management+xml;version=3;q=0.03
		application/vnd.net.juniper.space.job-management+json;version=3;q=0.03

GET /api/space/job-management/jobs
	Accept:
		application/vnd.net.juniper.space.job-management.jobs+json;version=2;q=0.02
		application/vnd.net.juniper.space.job-management.jobs+xml;version=2;q=0.02

GET /api/space/job-management/jobs
	Accept:
		application/vnd.net.juniper.space.job-management.jobs+xml;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.jobs+json;version=1;q=0.01

GET /api/space/job-management/jobs
	Accept:
		application/vnd.net.juniper.space.job-management.jobs+json;version=3;q=0.03
		application/vnd.net.juniper.space.job-management.jobs+xml;version=3;q=0.03

GET /api/space/job-management/jobs/{$jobID}
	Accept:
		application/vnd.net.juniper.space.job-management.job+json;version=2;q=0.02
		application/vnd.net.juniper.space.job-management.job+xml;version=2;q=0.02

DELETE /api/space/job-management/jobs/{$jobID}

GET /api/space/job-management/jobs/{$jobID}
	Accept:
		application/vnd.net.juniper.space.job-management.job+xml;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.job+json;version=1;q=0.01

PUT /api/space/job-management/jobs/{$jobID}
	Accept:
		application/vnd.net.juniper.space.job-management.job+xml;version=3;q=0.03
		application/vnd.net.juniper.space.job-management.job+json;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.job-management.job+xml;version=3;charset=UTF-8
		application/vnd.net.juniper.space.job-management.job+json;version=3;charset=UTF-8

GET /api/space/job-management/jobs/{$jobID}
	Accept:
		application/vnd.net.juniper.space.job-management.job+xml;version=3;q=0.03
		application/vnd.net.juniper.space.job-management.job+json;version=3;q=0.03

PATCH /api/space/job-management/jobs/{$jobID}
	Accept:
		application/vnd.net.juniper.space.job-management.job+xml;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.job-management.job_patch+xml;version=3;charset=UTF-8

POST /api/space/job-management/jobs/{$jobID}/cancel

GET /api/space/job-management/jobs/{$jobID}/progress-update
	Accept:
		application/vnd.net.juniper.space.job-management.progress-update+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.progress-update+xml;version=1;q=0.01

POST /api/space/job-management/jobs/{$jobID}/reschedule-job
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.03
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.03

GET /api/space/managed-domain
	Accept:
		application/vnd.net.juniper.space.managed-domain+xml;version=1
		application/vnd.net.juniper.space.managed-domain+json;version=1

GET /api/space/managed-domain/managed-elements
	Accept:
		application/vnd.net.juniper.space.managed-domain.managed-elements+json;version=1
		application/vnd.net.juniper.space.managed-domain.managed-elements+xml;version=1

GET /api/space/managed-domain/ptps
	Accept:
		application/vnd.net.juniper.space.managed-domain.ptps+xml;version=1
		application/vnd.net.juniper.space.managed-domain.ptps+json;version=1

GET /api/space/opennms
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/opennms/nodes
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/opennms/alarms
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

PUT /api/space/opennms/alarms
	Accept:
		application/x-www-form-urlencoded;version=1
		application/vnd.net.juniper.space.opennms+xml;version=1

GET /api/space/opennms/stats/alarms
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

POST /api/space/opennms/acks
	Accept:
		application/x-www-form-urlencoded;version=1
		application/vnd.net.juniper.space.opennms+xml;version=1

GET /api/space/opennms/acks
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/opennms/requisitions
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/opennms/outages
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/opennms/sched-outages
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

POST /api/space/opennms/sched-outages
	Accept:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.opennms+xml;version=1
		application/vnd.net.juniper.space.opennms+json;version=1

GET /api/space/schema-service
	Accept:
		application/vnd.net.juniper.space.schema-service+xml;version=2;q=0.02
		application/vnd.net.juniper.space.schema-service+json;version=2;q=0.02

GET /api/space/schema-service/unused-schemas
	Accept:
		application/vnd.net.juniper.space.schema-service.unused-schemas+xml;version=2;q=0.02
		application/vnd.net.juniper.space.schema-service.unused-schemas+json;version=2;q=0.02

POST /api/space/schema-service/install-schemas
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.schema-service.install-schemas-tgz-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.schema-service.install-schemas-tgz-request+xml;version=1;charset=UTF-8

POST /api/space/schema-service/install-schemas
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.01
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.schema-service.install-schemas-svn-request+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.schema-service.install-schemas-svn-request+xml;version=1;charset=UTF-8

POST /api/space/schema-service/upload-tgz-schema-file
	Accept:
		application/vnd.net.juniper.space.schema-service.schemas+xml;version=1;q=0.01
		application/vnd.net.juniper.space.schema-service.schemas+json;version=1;q=0.01
	Content-Type:
		multipart/form-data

POST /api/space/schema-service/delete-schemas
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.schema-service.delete-schemas+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.schema-service.delete-schemas+json;version=2;charset=UTF-8

GET /api/space/script-management
	Accept:
		application/vnd.net.juniper.space.script-management+xml;version=1;q=0.01
		application/vnd.net.juniper.space.script-management+json;version=1;q=0.01

GET /api/space/script-management
	Accept:
		application/vnd.net.juniper.space.script-management+xml;version=1;q=0.01
		application/vnd.net.juniper.space.script-management+json;version=1;q=0.01

GET /api/space/script-management
	Accept:
		application/vnd.net.juniper.space.script-management+xml;version=2;q=0.02
		application/vnd.net.juniper.space.script-management+json;version=2;q=0.02

POST /api/space/script-management/scripts
	Accept:
		application/vnd.net.juniper.space.script-management.script+json;version=1
		application/vnd.net.juniper.space.script-management.script+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.script-management.script+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.script-management.script+json;version=1;charset=UTF-8

GET /api/space/script-management/scripts
	Accept:
		application/vnd.net.juniper.space.script-management.scripts+json;version=1;q=.01
		application/vnd.net.juniper.space.script-management.scripts+xml;version=1;q=.01

GET /api/space/script-management/scripts
	Accept:
		application/vnd.net.juniper.space.script-management.scripts+xml;version=2;q=.02
		application/vnd.net.juniper.space.script-management.scripts+json;version=2;q=.02

DELETE /api/space/script-management/scripts/{$scriptID}
	Accept:
		application/vnd.net.juniper.space.script-management.script+json;version=1
		application/vnd.net.juniper.space.script-management.script+xml;version=1

GET /api/space/script-management/scripts/{$scriptID}
	Accept:
		application/vnd.net.juniper.space.script-management.script+json;version=1
		application/vnd.net.juniper.space.script-management.script+xml;version=1

PUT /api/space/script-management/scripts/{$scriptID}
	Accept:
		application/vnd.net.juniper.space.script-management.script+json;version=1
		application/vnd.net.juniper.space.script-management.script+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.script-management.script+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.script-management.script+json;version=1;charset=UTF-8

GET /api/space/script-management/scripts/{$scriptID}/results
	Accept:
		application/vnd.net.juniper.space.script-management.scripts-results+json;version=1
		application/vnd.net.juniper.space.script-management.scripts-results+xml;version=1

GET /api/space/script-management/scripts/{$scriptID}/contents
	Accept:
		application/vnd.net.juniper.space.script-management.script+json;version=1
		application/vnd.net.juniper.space.script-management.script+xml;version=1

GET /api/space/script-management/scripts/{$scriptID}/parameters
	Accept:
		application/vnd.net.juniper.space.script-management.script-parameters+xml;version=2
		application/vnd.net.juniper.space.script-management.script-parameters+json;version=2

GET /api/space/script-management/scripts/{$scriptID}/view-associated-devices
	Accept:
		application/vnd.net.juniper.space.script-management.view-associated-devices+json;version=1
		application/vnd.net.juniper.space.script-management.view-associated-devices+xml;version=1

GET /api/space/script-management/scripts/{$scriptID}/view-associated-devices
	Accept:
		application/vnd.net.juniper.space.script-management.view-associated-devices+json;version=2
		application/vnd.net.juniper.space.script-management.view-associated-devices+xml;version=2

POST /api/space/script-management/scripts/exec-deploy
	Accept:
		application/vnd.net.juniper.space.script-management.exec-deploy+json;version=1
		application/vnd.net.juniper.space.script-management.exec-deploy+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.script-management.exec-deploy+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.script-management.exec-deploy+xml;version=1;charset=UTF-8

POST /api/space/script-management/scripts/exec-deploy
	Accept:
		application/vnd.net.juniper.space.script-management.exec-deploy+xml;version=2
		application/vnd.net.juniper.space.script-management.exec-deploy+json;version=2
	Content-Type:
		application/vnd.net.juniper.space.script-management.exec-deploy+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.script-management.exec-deploy+json;version=2;charset=UTF-8

POST /api/space/script-management/scripts/exec-deploy
	Accept:
		application/vnd.net.juniper.space.job-management.task+json;version=1;q=0.02
		application/vnd.net.juniper.space.job-management.task+xml;version=1;q=0.02
	Content-Type:
		application/vnd.net.juniper.space.script-management.exec-deploy-multiple-support+json;version=2;charset=UTF-8
		application/vnd.net.juniper.space.script-management.exec-deploy-multiple-support+xml;version=2;charset=UTF-8

POST /api/space/script-management/scripts/exec-scripts
	Accept:
		application/vnd.net.juniper.space.script-management.exec-scripts+xml;version=1
		application/vnd.net.juniper.space.script-management.exec-scripts+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.script-management.exec-scripts+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.script-management.exec-scripts+xml;version=1;charset=UTF-8

POST /api/space/script-management/scripts/exec-scripts
	Accept:
		application/vnd.net.juniper.space.script-management.exec-scripts+xml;version=2
		application/vnd.net.juniper.space.script-management.exec-scripts+json;version=2
	Content-Type:
		application/vnd.net.juniper.space.script-management.exec-scripts+xml;version=2;charset=UTF-8
		application/vnd.net.juniper.space.script-management.exec-scripts+json;version=2;charset=UTF-8

GET /api/space/software-management
	Accept:
		application/vnd.net.juniper.space.software-management+xml;version=1
		application/vnd.net.juniper.space.software-management+json;version=1

POST /api/space/software-management/packages
	Accept:
		application/vnd.net.juniper.space.software-management.package+xml;version=1
		application/vnd.net.juniper.space.software-management.package+json;version=1
	Content-Type:
		multipart/form-data

GET /api/space/software-management/packages
	Accept:
		application/vnd.net.juniper.space.software-management.packages+json;version=1
		application/vnd.net.juniper.space.software-management.packages+xml;version=1

PUT /api/space/software-management/packages/{$softwarePackageID}
	Accept:
		application/vnd.net.juniper.space.software-management.package+xml;version=1
		application/vnd.net.juniper.space.software-management.package+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.software-management.package+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.software-management.package+json;version=1;charset=UTF-8

DELETE /api/space/software-management/packages/{$softwarePackageID}

GET /api/space/software-management/packages/{$softwarePackageID}
	Accept:
		application/vnd.net.juniper.space.software-management.package+xml;version=1
		application/vnd.net.juniper.space.software-management.package+json;version=1

POST /api/space/software-management/packages/{$softwarePackageID}/exec-stage
	Accept:
		application/vnd.net.juniper.space.software-management.exec-stage+json;version=1
		application/vnd.net.juniper.space.software-management.exec-stage+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.software-management.exec-stage+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.software-management.exec-stage+xml;version=1;charset=UTF-8

POST /api/space/software-management/packages/{$softwarePackageID}/exec-deploy
	Accept:
		application/vnd.net.juniper.space.software-management.exec-deploy+xml;version=1
		application/vnd.net.juniper.space.software-management.exec-deploy+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.software-management.exec-deploy+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.software-management.exec-deploy+xml;version=1;charset=UTF-8

POST /api/space/software-management/packages/{$softwarePackageID}/exec-verify
	Accept:
		application/vnd.net.juniper.space.software-management.exec-verify+json;version=1
		application/vnd.net.juniper.space.software-management.exec-verify+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.software-management.exec-verify+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.software-management.exec-verify+xml;version=1;charset=UTF-8

GET /api/space/software-management/packages/{$softwarePackageID}/associated-devices
	Accept:
		application/vnd.net.juniper.space.software-management.associated-devices+xml;version=2;q=0.01
		application/vnd.net.juniper.space.software-management.associated-devices+json;version=2;q=0.01

GET /api/space/tag-management
	Accept:
		application/vnd.net.juniper.space.tag-management+xml;version=1
		application/vnd.net.juniper.space.tag-management+json;version=1

GET /api/space/tag-management/tags
	Accept:
		application/vnd.net.juniper.space.tag-management.tags+json;version=1
		application/vnd.net.juniper.space.tag-management.tags+xml;version=1

POST /api/space/tag-management/tags
	Accept:
		application/vnd.net.juniper.space.tag-management.tag+xml;version=1
		application/vnd.net.juniper.space.tag-management.tag+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.tag-management.tag+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.tag-management.tag+xml;version=1;charset=UTF-8

PUT /api/space/tag-management/tags/{$tagID}
	Accept:
		application/vnd.net.juniper.space.tag-management.tag+xml;version=1
		application/vnd.net.juniper.space.tag-management.tag+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.tag-management.tag+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.tag-management.tag+xml;version=1;charset=UTF-8

DELETE /api/space/tag-management/tags/{$tagID}

GET /api/space/tag-management/tags/{$tagID}
	Accept:
		application/vnd.net.juniper.space.tag-management.tag+xml;version=1
		application/vnd.net.juniper.space.tag-management.tag+json;version=1

POST /api/space/tag-management/tags/{$tagID}/targets
	Accept:
		application/vnd.net.juniper.space.tag-management.target+xml;version=1
		application/vnd.net.juniper.space.tag-management.target+json;version=1
	Content-Type:
		application/vnd.net.juniper.space.tag-management.target+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.tag-management.target+json;version=1;charset=UTF-8

GET /api/space/tag-management/tags/{$tagID}/targets
	Accept:
		application/vnd.net.juniper.space.tag-management.targets+json;version=1
		application/vnd.net.juniper.space.tag-management.targets+xml;version=1

POST /api/space/tag-management/tags/{$tagID}/targets
	Accept:
		application/vnd.net.juniper.space.tag-management.targets+json;version=1
		application/vnd.net.juniper.space.tag-management.targets+xml;version=1
	Content-Type:
		application/vnd.net.juniper.space.tag-management.targets+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.tag-management.targets+json;version=1;charset=UTF-8

DELETE /api/space/tag-management/tags/{$tagID}/targets/{$tagTargetID}

GET /api/space/tag-management/tags/{$tagID}/targets/{$tagTargetID}
	Accept:
		application/vnd.net.juniper.space.tag-management.targets+json;version=1
		application/vnd.net.juniper.space.tag-management.targets+xml;version=1

GET /api/space/user-management
	Accept:
		application/vnd.net.juniper.space.user-management+json;version=1
		application/vnd.net.juniper.space.user-management+xml;version=1

GET /api/space/user-management
	Accept:
		application/vnd.net.juniper.space.user-management+xml;version=4;q=0.04
		application/vnd.net.juniper.space.user-management+json;version=4;q=0.04

POST /api/space/user-management/api-access-profiles
	Accept:
		application/vnd.net.juniper.space.user-management.api-access-profile+xml;version=4;q=0.04
		application/vnd.net.juniper.space.user-management.api-access-profile+json;version=4;q=0.04
	Content-Type:
		application/vnd.net.juniper.space.user-management.api-access-profile+json;version=4;charset=UTF-8
		application/vnd.net.juniper.space.user-management.api-access-profile+xml;version=4;charset=UTF-8

GET /api/space/user-management/api-access-profiles
	Accept:
		application/vnd.net.juniper.space.user-management.api-access-profiles+xml;version=4;q=0.04
		application/vnd.net.juniper.space.user-management.api-access-profiles+json;version=4;q=0.04

PATCH /api/space/user-management/api-access-profiles
	Content-Type:
		application/vnd.net.juniper.space.user-management.api-access-profiles_patch+xml;version=4;charset=UTF-8

GET /api/space/user-management/capabilities
	Accept:
		application/vnd.net.juniper.space.user-management.capabilities+json;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.capabilities+xml;version=1;q=0.01

GET /api/space/user-management/profiles
	Accept:
		application/vnd.net.juniper.space.user-management.profiles+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.profiles+json;version=1;q=0.01

POST /api/space/user-management/profiles
	Accept:
		application/vnd.net.juniper.space.user-management.profile+json;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.profile+xml;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.user-management.profile+xml;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.profile+json;version=1;charset=UTF-8

POST /api/space/user-management/users
	Accept:
		application/vnd.net.juniper.space.user-management.user+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.user+json;version=1;q=0.01
	Content-Type:
		application/vnd.net.juniper.space.user-management.user+json;version=1;charset=UTF-8
		application/vnd.net.juniper.space.user-management.user+xml;version=1;charset=UTF-8

GET /api/space/user-management/users
	Accept:
		application/vnd.net.juniper.space.user-management.users+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.users+json;version=1;q=0.01

GET /api/space/user-management/users
	Accept:
		application/vnd.net.juniper.space.user-management.users+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.users+json;version=3;q=0.03

GET /api/space/user-management/tasks
	Accept:
		application/vnd.net.juniper.space.user-management.tasks+json;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.tasks+xml;version=1;q=0.01

GET /api/space/user-management/active-user-sessions
	Accept:
		application/vnd.net.juniper.space.user-management.active-user-sessions+xml;version=1;q=0.01
		application/vnd.net.juniper.space.user-management.active-user-sessions+json;version=1;q=0.01

GET /api/space/user-management/roles
	Accept:
		application/vnd.net.juniper.space.user-management.roles+json;version=1;q=.01
		application/vnd.net.juniper.space.user-management.roles+xml;version=1;q=.01

GET /api/space/user-management/roles
	Accept:
		application/vnd.net.juniper.space.user-management.roles+json;version=2;q=.02
		application/vnd.net.juniper.space.user-management.roles+xml;version=2;q=.02

GET /api/space/user-management/roles
	Accept:
		application/vnd.net.juniper.space.user-management.roles+json;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.roles+xml;version=3;q=0.03

POST /api/space/user-management/roles
	Accept:
		application/vnd.net.juniper.space.user-management.role+xml;version=3;q=0.03
		application/vnd.net.juniper.space.user-management.role+json;version=3;q=0.03
	Content-Type:
		application/vnd.net.juniper.space.user-management.role+json;version=3;charset=UTF-8
		application/vnd.net.juniper.space.user-management.role+xml;version=3;charset=UTF-8

PATCH /api/space/user-management/roles
	Content-Type:
		application/vnd.net.juniper.space.user-management.roles_patch+xml;version=3;charset=UTF-8';


$apis = explode("\n\n", str_replace("\t", "", $apis));

$apiConv = [];
foreach ($apis as $api) {
    $apiSplit = explode("\n", $api, 2);

    list($operation, $path) = explode(" ", $apiSplit[0]);

    if (isset($apiSplit[1])) {
        $theRest = $apiSplit[1];

        if (strpos($theRest, "Content-Type:") !== false) {
            list($accept, $contentType) = explode("Content-Type:\n", $theRest);
            $accept = str_replace("Accept:\n", "", trim($accept));
            $accept = explode("\n", trim($accept));

            $contentType = explode("\n", trim($contentType));

            $apiConv[$operation][$path]['Accept'][] = $accept;
            $apiConv[$operation][$path]['Content-Type'][] = $contentType;
        }
        else {

            $accept = str_replace("Accept:\n", "", $theRest);
            $accept = explode("\n", $accept);
            $apiConv[$operation][$path]['Accept'][] = $accept;
            $apiConv[$operation][$path]['Content-Type'][] = [];
        }

    }
    else {
        $apiConv[$operation][$path]['Accept'][] = [];
        $apiConv[$operation][$path]['Content-Type'][] = [];
    }
}

print_r($apiConv);
