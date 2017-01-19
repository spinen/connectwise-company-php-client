<?php
/**
 * CompanyManagementSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Company API
 *
 * ConnectWise Company API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Company\Model;

use \ArrayAccess;

/**
 * CompanyManagementSummary Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Company
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyManagementSummary implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CompanyManagementSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'management_solution' => '\Spinen\ConnectWise\Clients\Company\Model\ManagementSolutionReference',
        'group_identifier' => 'string',
        'device_type' => 'string',
        'agreement' => '\Spinen\ConnectWise\Clients\Company\Model\AgreementReference',
        'snmp_machines' => 'int',
        'total_workstations' => 'int',
        'total_servers' => 'int',
        'total_windows_servers' => 'int',
        'total_windows_workstations' => 'int',
        'total_managed_machines' => 'int',
        'servers_offline' => 'int',
        'servers_disk_space_low' => 'int',
        'failed_backup_jobs' => 'int',
        'total_notifications' => 'int',
        'successful_backup_jobs' => 'int',
        'server_availability' => 'int',
        'viruses_removed' => 'int',
        'spyware_items_removed' => 'int',
        'windows_patches_installed' => 'int',
        'disk_cleanups' => 'int',
        'disk_defragmentations' => 'int',
        'fully_patched_machines' => 'int',
        'missing_one_two_patches_machines' => 'int',
        'missing_three_five_patches_machines' => 'int',
        'missing_more_five_patches_machines' => 'int',
        'missing_unscanned_patches_machines' => 'int',
        'alerts_generated' => 'string',
        'internet_connectivity' => 'double',
        'disk_space_cleaned_mb' => 'int',
        'missing_security_patches' => 'string',
        'cpu_utilization' => 'double',
        'memory_utilization' => 'double',
        'company' => '\Spinen\ConnectWise\Clients\Company\Model\CompanyReference',
        '_info' => '\Spinen\ConnectWise\Clients\Company\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'management_solution' => 'managementSolution',
        'group_identifier' => 'groupIdentifier',
        'device_type' => 'deviceType',
        'agreement' => 'agreement',
        'snmp_machines' => 'snmpMachines',
        'total_workstations' => 'totalWorkstations',
        'total_servers' => 'totalServers',
        'total_windows_servers' => 'totalWindowsServers',
        'total_windows_workstations' => 'totalWindowsWorkstations',
        'total_managed_machines' => 'totalManagedMachines',
        'servers_offline' => 'serversOffline',
        'servers_disk_space_low' => 'serversDiskSpaceLow',
        'failed_backup_jobs' => 'failedBackupJobs',
        'total_notifications' => 'totalNotifications',
        'successful_backup_jobs' => 'successfulBackupJobs',
        'server_availability' => 'serverAvailability',
        'viruses_removed' => 'virusesRemoved',
        'spyware_items_removed' => 'spywareItemsRemoved',
        'windows_patches_installed' => 'windowsPatchesInstalled',
        'disk_cleanups' => 'diskCleanups',
        'disk_defragmentations' => 'diskDefragmentations',
        'fully_patched_machines' => 'fullyPatchedMachines',
        'missing_one_two_patches_machines' => 'missingOneTwoPatchesMachines',
        'missing_three_five_patches_machines' => 'missingThreeFivePatchesMachines',
        'missing_more_five_patches_machines' => 'missingMoreFivePatchesMachines',
        'missing_unscanned_patches_machines' => 'missingUnscannedPatchesMachines',
        'alerts_generated' => 'alertsGenerated',
        'internet_connectivity' => 'internetConnectivity',
        'disk_space_cleaned_mb' => 'diskSpaceCleanedMb',
        'missing_security_patches' => 'missingSecurityPatches',
        'cpu_utilization' => 'cpuUtilization',
        'memory_utilization' => 'memoryUtilization',
        'company' => 'company',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'management_solution' => 'setManagementSolution',
        'group_identifier' => 'setGroupIdentifier',
        'device_type' => 'setDeviceType',
        'agreement' => 'setAgreement',
        'snmp_machines' => 'setSnmpMachines',
        'total_workstations' => 'setTotalWorkstations',
        'total_servers' => 'setTotalServers',
        'total_windows_servers' => 'setTotalWindowsServers',
        'total_windows_workstations' => 'setTotalWindowsWorkstations',
        'total_managed_machines' => 'setTotalManagedMachines',
        'servers_offline' => 'setServersOffline',
        'servers_disk_space_low' => 'setServersDiskSpaceLow',
        'failed_backup_jobs' => 'setFailedBackupJobs',
        'total_notifications' => 'setTotalNotifications',
        'successful_backup_jobs' => 'setSuccessfulBackupJobs',
        'server_availability' => 'setServerAvailability',
        'viruses_removed' => 'setVirusesRemoved',
        'spyware_items_removed' => 'setSpywareItemsRemoved',
        'windows_patches_installed' => 'setWindowsPatchesInstalled',
        'disk_cleanups' => 'setDiskCleanups',
        'disk_defragmentations' => 'setDiskDefragmentations',
        'fully_patched_machines' => 'setFullyPatchedMachines',
        'missing_one_two_patches_machines' => 'setMissingOneTwoPatchesMachines',
        'missing_three_five_patches_machines' => 'setMissingThreeFivePatchesMachines',
        'missing_more_five_patches_machines' => 'setMissingMoreFivePatchesMachines',
        'missing_unscanned_patches_machines' => 'setMissingUnscannedPatchesMachines',
        'alerts_generated' => 'setAlertsGenerated',
        'internet_connectivity' => 'setInternetConnectivity',
        'disk_space_cleaned_mb' => 'setDiskSpaceCleanedMb',
        'missing_security_patches' => 'setMissingSecurityPatches',
        'cpu_utilization' => 'setCpuUtilization',
        'memory_utilization' => 'setMemoryUtilization',
        'company' => 'setCompany',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'management_solution' => 'getManagementSolution',
        'group_identifier' => 'getGroupIdentifier',
        'device_type' => 'getDeviceType',
        'agreement' => 'getAgreement',
        'snmp_machines' => 'getSnmpMachines',
        'total_workstations' => 'getTotalWorkstations',
        'total_servers' => 'getTotalServers',
        'total_windows_servers' => 'getTotalWindowsServers',
        'total_windows_workstations' => 'getTotalWindowsWorkstations',
        'total_managed_machines' => 'getTotalManagedMachines',
        'servers_offline' => 'getServersOffline',
        'servers_disk_space_low' => 'getServersDiskSpaceLow',
        'failed_backup_jobs' => 'getFailedBackupJobs',
        'total_notifications' => 'getTotalNotifications',
        'successful_backup_jobs' => 'getSuccessfulBackupJobs',
        'server_availability' => 'getServerAvailability',
        'viruses_removed' => 'getVirusesRemoved',
        'spyware_items_removed' => 'getSpywareItemsRemoved',
        'windows_patches_installed' => 'getWindowsPatchesInstalled',
        'disk_cleanups' => 'getDiskCleanups',
        'disk_defragmentations' => 'getDiskDefragmentations',
        'fully_patched_machines' => 'getFullyPatchedMachines',
        'missing_one_two_patches_machines' => 'getMissingOneTwoPatchesMachines',
        'missing_three_five_patches_machines' => 'getMissingThreeFivePatchesMachines',
        'missing_more_five_patches_machines' => 'getMissingMoreFivePatchesMachines',
        'missing_unscanned_patches_machines' => 'getMissingUnscannedPatchesMachines',
        'alerts_generated' => 'getAlertsGenerated',
        'internet_connectivity' => 'getInternetConnectivity',
        'disk_space_cleaned_mb' => 'getDiskSpaceCleanedMb',
        'missing_security_patches' => 'getMissingSecurityPatches',
        'cpu_utilization' => 'getCpuUtilization',
        'memory_utilization' => 'getMemoryUtilization',
        'company' => 'getCompany',
        '_info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const DEVICE_TYPE_WORKSTATIONS_AND_SERVERS = 'WorkstationsAndServers';
    const DEVICE_TYPE_BACKUP_STATS = 'BackupStats';
    const DEVICE_TYPE_SERVERS = 'Servers';
    const DEVICE_TYPE_WORKSTATIONS = 'Workstations';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_WORKSTATIONS_AND_SERVERS,
            self::DEVICE_TYPE_BACKUP_STATS,
            self::DEVICE_TYPE_SERVERS,
            self::DEVICE_TYPE_WORKSTATIONS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['management_solution'] = isset($data['management_solution']) ? $data['management_solution'] : null;
        $this->container['group_identifier'] = isset($data['group_identifier']) ? $data['group_identifier'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['agreement'] = isset($data['agreement']) ? $data['agreement'] : null;
        $this->container['snmp_machines'] = isset($data['snmp_machines']) ? $data['snmp_machines'] : null;
        $this->container['total_workstations'] = isset($data['total_workstations']) ? $data['total_workstations'] : null;
        $this->container['total_servers'] = isset($data['total_servers']) ? $data['total_servers'] : null;
        $this->container['total_windows_servers'] = isset($data['total_windows_servers']) ? $data['total_windows_servers'] : null;
        $this->container['total_windows_workstations'] = isset($data['total_windows_workstations']) ? $data['total_windows_workstations'] : null;
        $this->container['total_managed_machines'] = isset($data['total_managed_machines']) ? $data['total_managed_machines'] : null;
        $this->container['servers_offline'] = isset($data['servers_offline']) ? $data['servers_offline'] : null;
        $this->container['servers_disk_space_low'] = isset($data['servers_disk_space_low']) ? $data['servers_disk_space_low'] : null;
        $this->container['failed_backup_jobs'] = isset($data['failed_backup_jobs']) ? $data['failed_backup_jobs'] : null;
        $this->container['total_notifications'] = isset($data['total_notifications']) ? $data['total_notifications'] : null;
        $this->container['successful_backup_jobs'] = isset($data['successful_backup_jobs']) ? $data['successful_backup_jobs'] : null;
        $this->container['server_availability'] = isset($data['server_availability']) ? $data['server_availability'] : null;
        $this->container['viruses_removed'] = isset($data['viruses_removed']) ? $data['viruses_removed'] : null;
        $this->container['spyware_items_removed'] = isset($data['spyware_items_removed']) ? $data['spyware_items_removed'] : null;
        $this->container['windows_patches_installed'] = isset($data['windows_patches_installed']) ? $data['windows_patches_installed'] : null;
        $this->container['disk_cleanups'] = isset($data['disk_cleanups']) ? $data['disk_cleanups'] : null;
        $this->container['disk_defragmentations'] = isset($data['disk_defragmentations']) ? $data['disk_defragmentations'] : null;
        $this->container['fully_patched_machines'] = isset($data['fully_patched_machines']) ? $data['fully_patched_machines'] : null;
        $this->container['missing_one_two_patches_machines'] = isset($data['missing_one_two_patches_machines']) ? $data['missing_one_two_patches_machines'] : null;
        $this->container['missing_three_five_patches_machines'] = isset($data['missing_three_five_patches_machines']) ? $data['missing_three_five_patches_machines'] : null;
        $this->container['missing_more_five_patches_machines'] = isset($data['missing_more_five_patches_machines']) ? $data['missing_more_five_patches_machines'] : null;
        $this->container['missing_unscanned_patches_machines'] = isset($data['missing_unscanned_patches_machines']) ? $data['missing_unscanned_patches_machines'] : null;
        $this->container['alerts_generated'] = isset($data['alerts_generated']) ? $data['alerts_generated'] : null;
        $this->container['internet_connectivity'] = isset($data['internet_connectivity']) ? $data['internet_connectivity'] : null;
        $this->container['disk_space_cleaned_mb'] = isset($data['disk_space_cleaned_mb']) ? $data['disk_space_cleaned_mb'] : null;
        $this->container['missing_security_patches'] = isset($data['missing_security_patches']) ? $data['missing_security_patches'] : null;
        $this->container['cpu_utilization'] = isset($data['cpu_utilization']) ? $data['cpu_utilization'] : null;
        $this->container['memory_utilization'] = isset($data['memory_utilization']) ? $data['memory_utilization'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['group_identifier'] === null) {
            $invalid_properties[] = "'group_identifier' can't be null";
        }
        if ((strlen($this->container['group_identifier']) > 100)) {
            $invalid_properties[] = "invalid value for 'group_identifier', the character length must be smaller than or equal to 100.";
        }

        $allowed_values = ["WorkstationsAndServers", "BackupStats", "Servers", "Workstations"];
        if (!in_array($this->container['device_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'device_type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['group_identifier'] === null) {
            return false;
        }
        if (strlen($this->container['group_identifier']) > 100) {
            return false;
        }
        $allowed_values = ["WorkstationsAndServers", "BackupStats", "Servers", "Workstations"];
        if (!in_array($this->container['device_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets management_solution
     * @return \Spinen\ConnectWise\Clients\Company\Model\ManagementSolutionReference
     */
    public function getManagementSolution()
    {
        return $this->container['management_solution'];
    }

    /**
     * Sets management_solution
     * @param \Spinen\ConnectWise\Clients\Company\Model\ManagementSolutionReference $management_solution
     * @return $this
     */
    public function setManagementSolution($management_solution)
    {
        $this->container['management_solution'] = $management_solution;

        return $this;
    }

    /**
     * Gets group_identifier
     * @return string
     */
    public function getGroupIdentifier()
    {
        return $this->container['group_identifier'];
    }

    /**
     * Sets group_identifier
     * @param string $group_identifier
     * @return $this
     */
    public function setGroupIdentifier($group_identifier)
    {
        if ((strlen($group_identifier) > 100)) {
            throw new \InvalidArgumentException('invalid length for $group_identifier when calling CompanyManagementSummary., must be smaller than or equal to 100.');
        }

        $this->container['group_identifier'] = $group_identifier;

        return $this;
    }

    /**
     * Gets device_type
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     * @param string $device_type deviceType is required if the managementSolution is Legacy
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $allowed_values = array('WorkstationsAndServers', 'BackupStats', 'Servers', 'Workstations');
        if (!is_null($device_type) && (!in_array($device_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'device_type', must be one of 'WorkstationsAndServers', 'BackupStats', 'Servers', 'Workstations'");
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets agreement
     * @return \Spinen\ConnectWise\Clients\Company\Model\AgreementReference
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     * @param \Spinen\ConnectWise\Clients\Company\Model\AgreementReference $agreement
     * @return $this
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

        return $this;
    }

    /**
     * Gets snmp_machines
     * @return int
     */
    public function getSnmpMachines()
    {
        return $this->container['snmp_machines'];
    }

    /**
     * Sets snmp_machines
     * @param int $snmp_machines
     * @return $this
     */
    public function setSnmpMachines($snmp_machines)
    {
        $this->container['snmp_machines'] = $snmp_machines;

        return $this;
    }

    /**
     * Gets total_workstations
     * @return int
     */
    public function getTotalWorkstations()
    {
        return $this->container['total_workstations'];
    }

    /**
     * Sets total_workstations
     * @param int $total_workstations
     * @return $this
     */
    public function setTotalWorkstations($total_workstations)
    {
        $this->container['total_workstations'] = $total_workstations;

        return $this;
    }

    /**
     * Gets total_servers
     * @return int
     */
    public function getTotalServers()
    {
        return $this->container['total_servers'];
    }

    /**
     * Sets total_servers
     * @param int $total_servers
     * @return $this
     */
    public function setTotalServers($total_servers)
    {
        $this->container['total_servers'] = $total_servers;

        return $this;
    }

    /**
     * Gets total_windows_servers
     * @return int
     */
    public function getTotalWindowsServers()
    {
        return $this->container['total_windows_servers'];
    }

    /**
     * Sets total_windows_servers
     * @param int $total_windows_servers
     * @return $this
     */
    public function setTotalWindowsServers($total_windows_servers)
    {
        $this->container['total_windows_servers'] = $total_windows_servers;

        return $this;
    }

    /**
     * Gets total_windows_workstations
     * @return int
     */
    public function getTotalWindowsWorkstations()
    {
        return $this->container['total_windows_workstations'];
    }

    /**
     * Sets total_windows_workstations
     * @param int $total_windows_workstations
     * @return $this
     */
    public function setTotalWindowsWorkstations($total_windows_workstations)
    {
        $this->container['total_windows_workstations'] = $total_windows_workstations;

        return $this;
    }

    /**
     * Gets total_managed_machines
     * @return int
     */
    public function getTotalManagedMachines()
    {
        return $this->container['total_managed_machines'];
    }

    /**
     * Sets total_managed_machines
     * @param int $total_managed_machines
     * @return $this
     */
    public function setTotalManagedMachines($total_managed_machines)
    {
        $this->container['total_managed_machines'] = $total_managed_machines;

        return $this;
    }

    /**
     * Gets servers_offline
     * @return int
     */
    public function getServersOffline()
    {
        return $this->container['servers_offline'];
    }

    /**
     * Sets servers_offline
     * @param int $servers_offline
     * @return $this
     */
    public function setServersOffline($servers_offline)
    {
        $this->container['servers_offline'] = $servers_offline;

        return $this;
    }

    /**
     * Gets servers_disk_space_low
     * @return int
     */
    public function getServersDiskSpaceLow()
    {
        return $this->container['servers_disk_space_low'];
    }

    /**
     * Sets servers_disk_space_low
     * @param int $servers_disk_space_low
     * @return $this
     */
    public function setServersDiskSpaceLow($servers_disk_space_low)
    {
        $this->container['servers_disk_space_low'] = $servers_disk_space_low;

        return $this;
    }

    /**
     * Gets failed_backup_jobs
     * @return int
     */
    public function getFailedBackupJobs()
    {
        return $this->container['failed_backup_jobs'];
    }

    /**
     * Sets failed_backup_jobs
     * @param int $failed_backup_jobs
     * @return $this
     */
    public function setFailedBackupJobs($failed_backup_jobs)
    {
        $this->container['failed_backup_jobs'] = $failed_backup_jobs;

        return $this;
    }

    /**
     * Gets total_notifications
     * @return int
     */
    public function getTotalNotifications()
    {
        return $this->container['total_notifications'];
    }

    /**
     * Sets total_notifications
     * @param int $total_notifications
     * @return $this
     */
    public function setTotalNotifications($total_notifications)
    {
        $this->container['total_notifications'] = $total_notifications;

        return $this;
    }

    /**
     * Gets successful_backup_jobs
     * @return int
     */
    public function getSuccessfulBackupJobs()
    {
        return $this->container['successful_backup_jobs'];
    }

    /**
     * Sets successful_backup_jobs
     * @param int $successful_backup_jobs
     * @return $this
     */
    public function setSuccessfulBackupJobs($successful_backup_jobs)
    {
        $this->container['successful_backup_jobs'] = $successful_backup_jobs;

        return $this;
    }

    /**
     * Gets server_availability
     * @return int
     */
    public function getServerAvailability()
    {
        return $this->container['server_availability'];
    }

    /**
     * Sets server_availability
     * @param int $server_availability
     * @return $this
     */
    public function setServerAvailability($server_availability)
    {
        $this->container['server_availability'] = $server_availability;

        return $this;
    }

    /**
     * Gets viruses_removed
     * @return int
     */
    public function getVirusesRemoved()
    {
        return $this->container['viruses_removed'];
    }

    /**
     * Sets viruses_removed
     * @param int $viruses_removed
     * @return $this
     */
    public function setVirusesRemoved($viruses_removed)
    {
        $this->container['viruses_removed'] = $viruses_removed;

        return $this;
    }

    /**
     * Gets spyware_items_removed
     * @return int
     */
    public function getSpywareItemsRemoved()
    {
        return $this->container['spyware_items_removed'];
    }

    /**
     * Sets spyware_items_removed
     * @param int $spyware_items_removed
     * @return $this
     */
    public function setSpywareItemsRemoved($spyware_items_removed)
    {
        $this->container['spyware_items_removed'] = $spyware_items_removed;

        return $this;
    }

    /**
     * Gets windows_patches_installed
     * @return int
     */
    public function getWindowsPatchesInstalled()
    {
        return $this->container['windows_patches_installed'];
    }

    /**
     * Sets windows_patches_installed
     * @param int $windows_patches_installed
     * @return $this
     */
    public function setWindowsPatchesInstalled($windows_patches_installed)
    {
        $this->container['windows_patches_installed'] = $windows_patches_installed;

        return $this;
    }

    /**
     * Gets disk_cleanups
     * @return int
     */
    public function getDiskCleanups()
    {
        return $this->container['disk_cleanups'];
    }

    /**
     * Sets disk_cleanups
     * @param int $disk_cleanups
     * @return $this
     */
    public function setDiskCleanups($disk_cleanups)
    {
        $this->container['disk_cleanups'] = $disk_cleanups;

        return $this;
    }

    /**
     * Gets disk_defragmentations
     * @return int
     */
    public function getDiskDefragmentations()
    {
        return $this->container['disk_defragmentations'];
    }

    /**
     * Sets disk_defragmentations
     * @param int $disk_defragmentations
     * @return $this
     */
    public function setDiskDefragmentations($disk_defragmentations)
    {
        $this->container['disk_defragmentations'] = $disk_defragmentations;

        return $this;
    }

    /**
     * Gets fully_patched_machines
     * @return int
     */
    public function getFullyPatchedMachines()
    {
        return $this->container['fully_patched_machines'];
    }

    /**
     * Sets fully_patched_machines
     * @param int $fully_patched_machines
     * @return $this
     */
    public function setFullyPatchedMachines($fully_patched_machines)
    {
        $this->container['fully_patched_machines'] = $fully_patched_machines;

        return $this;
    }

    /**
     * Gets missing_one_two_patches_machines
     * @return int
     */
    public function getMissingOneTwoPatchesMachines()
    {
        return $this->container['missing_one_two_patches_machines'];
    }

    /**
     * Sets missing_one_two_patches_machines
     * @param int $missing_one_two_patches_machines
     * @return $this
     */
    public function setMissingOneTwoPatchesMachines($missing_one_two_patches_machines)
    {
        $this->container['missing_one_two_patches_machines'] = $missing_one_two_patches_machines;

        return $this;
    }

    /**
     * Gets missing_three_five_patches_machines
     * @return int
     */
    public function getMissingThreeFivePatchesMachines()
    {
        return $this->container['missing_three_five_patches_machines'];
    }

    /**
     * Sets missing_three_five_patches_machines
     * @param int $missing_three_five_patches_machines
     * @return $this
     */
    public function setMissingThreeFivePatchesMachines($missing_three_five_patches_machines)
    {
        $this->container['missing_three_five_patches_machines'] = $missing_three_five_patches_machines;

        return $this;
    }

    /**
     * Gets missing_more_five_patches_machines
     * @return int
     */
    public function getMissingMoreFivePatchesMachines()
    {
        return $this->container['missing_more_five_patches_machines'];
    }

    /**
     * Sets missing_more_five_patches_machines
     * @param int $missing_more_five_patches_machines
     * @return $this
     */
    public function setMissingMoreFivePatchesMachines($missing_more_five_patches_machines)
    {
        $this->container['missing_more_five_patches_machines'] = $missing_more_five_patches_machines;

        return $this;
    }

    /**
     * Gets missing_unscanned_patches_machines
     * @return int
     */
    public function getMissingUnscannedPatchesMachines()
    {
        return $this->container['missing_unscanned_patches_machines'];
    }

    /**
     * Sets missing_unscanned_patches_machines
     * @param int $missing_unscanned_patches_machines
     * @return $this
     */
    public function setMissingUnscannedPatchesMachines($missing_unscanned_patches_machines)
    {
        $this->container['missing_unscanned_patches_machines'] = $missing_unscanned_patches_machines;

        return $this;
    }

    /**
     * Gets alerts_generated
     * @return string
     */
    public function getAlertsGenerated()
    {
        return $this->container['alerts_generated'];
    }

    /**
     * Sets alerts_generated
     * @param string $alerts_generated
     * @return $this
     */
    public function setAlertsGenerated($alerts_generated)
    {
        $this->container['alerts_generated'] = $alerts_generated;

        return $this;
    }

    /**
     * Gets internet_connectivity
     * @return double
     */
    public function getInternetConnectivity()
    {
        return $this->container['internet_connectivity'];
    }

    /**
     * Sets internet_connectivity
     * @param double $internet_connectivity
     * @return $this
     */
    public function setInternetConnectivity($internet_connectivity)
    {
        $this->container['internet_connectivity'] = $internet_connectivity;

        return $this;
    }

    /**
     * Gets disk_space_cleaned_mb
     * @return int
     */
    public function getDiskSpaceCleanedMb()
    {
        return $this->container['disk_space_cleaned_mb'];
    }

    /**
     * Sets disk_space_cleaned_mb
     * @param int $disk_space_cleaned_mb
     * @return $this
     */
    public function setDiskSpaceCleanedMb($disk_space_cleaned_mb)
    {
        $this->container['disk_space_cleaned_mb'] = $disk_space_cleaned_mb;

        return $this;
    }

    /**
     * Gets missing_security_patches
     * @return string
     */
    public function getMissingSecurityPatches()
    {
        return $this->container['missing_security_patches'];
    }

    /**
     * Sets missing_security_patches
     * @param string $missing_security_patches
     * @return $this
     */
    public function setMissingSecurityPatches($missing_security_patches)
    {
        $this->container['missing_security_patches'] = $missing_security_patches;

        return $this;
    }

    /**
     * Gets cpu_utilization
     * @return double
     */
    public function getCpuUtilization()
    {
        return $this->container['cpu_utilization'];
    }

    /**
     * Sets cpu_utilization
     * @param double $cpu_utilization
     * @return $this
     */
    public function setCpuUtilization($cpu_utilization)
    {
        $this->container['cpu_utilization'] = $cpu_utilization;

        return $this;
    }

    /**
     * Gets memory_utilization
     * @return double
     */
    public function getMemoryUtilization()
    {
        return $this->container['memory_utilization'];
    }

    /**
     * Sets memory_utilization
     * @param double $memory_utilization
     * @return $this
     */
    public function setMemoryUtilization($memory_utilization)
    {
        $this->container['memory_utilization'] = $memory_utilization;

        return $this;
    }

    /**
     * Gets company
     * @return \Spinen\ConnectWise\Clients\Company\Model\CompanyReference
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Spinen\ConnectWise\Clients\Company\Model\CompanyReference $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Company\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Company\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Company\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Company\ObjectSerializer::sanitizeForSerialization($this));
    }
}


