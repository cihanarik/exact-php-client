<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncEmploymentSalary.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncPayrollEmploymentSalaries
 *
 * @property int $Timestamp Timestamp
 * @property int $AmountType Salary Section: Salary typeValue: 0 - Gross, 1 - Net.
 * @property string $AmountTypeDescription Salary Section: Salary type descriptionWhen AmountType value is 0, return 'Gross'When AmountType value 1, return 'Net'
 * @property float $AverageDaysPerWeek The average number of contract days that an employee works per week
 * @property float $AverageHoursPerWeek The average number of contract hours that an employee works per week
 * @property float $BillabilityTarget Schedule Section: Billability target
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description General section: Custom description
 * @property int $Division Division code
 * @property string $Employee Employee ID
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Employee number
 * @property string $Employment Employment
 * @property int $EmploymentNumber Employment number
 * @property int $EmploymentSalaryType Salary type of employment. 1 - Periodical (fixed), 2 - Per hour (variable)
 * @property string $EmploymentSalaryTypeDescription Salary type description
 * @property string $EndDate Salary record end date
 * @property float $ExternalRate Rate Section: External rate
 * @property int $Frequency Frequency: 1 - Yearly, 2 - Quarterly, 3 - Monthly, 4 - 4-weekly, 5 - Weekly, 11 - Yearly (Pro forma), 12 - Quarterly (Pro forma), 13 - Monthly (Pro forma), 14 - 4-Weekly (Pro forma), 15 - Weekly (Pro forma)
 * @property string $FrequencyDescription Payroll period frequency description
 * @property float $FulltimeAmount Salary when working fulltime
 * @property float $HourlyWage Hourly wage
 * @property string $ID Primary key
 * @property float $IntercompanyRate Rate Section: Intercompany rate
 * @property float $InternalRate Internal rate for time & billing or professional service user
 * @property int $JobLevel Employee job level in context of a wage scale
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $ParttimeAmount Salary when working parttime
 * @property float $ParttimeFactor Contract hours / Fulltime contract hours
 * @property int $SalaryBasedType Salary Section: Salary based on.Value: 0 - Manual entry, 1 - Wagescale, 2 - Minimum wage, 3 - Minimum hourly wage
 * @property string $SalaryBasedTypeDescription When SalaryBasedType value is 0, return 'Manual entry'When SalaryBasedType value 1, return 'Wage scale'When SalaryBasedType value 2, return 'Minimum wage'When SalaryBasedType value 3, return 'Minimum hourly wage'
 * @property string $Scale Employee wage scale
 * @property string $Schedule Employment schedule
 * @property string $ScheduleCode Employment schedule code
 * @property string $ScheduleDescription Description of employment schedule
 * @property string $StartDate Salary record start date
 * @property string $WageScale Salary Section: Wagescale ID
 * @property int $WageScalePeriod Salary Section: Period for automatic step increase
 * @property string $WageScaleStep Salary Section: Wagescale Step Code
 */
class SyncEmploymentSalary extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountType',
        'AmountTypeDescription',
        'AverageDaysPerWeek',
        'AverageHoursPerWeek',
        'BillabilityTarget',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Employment',
        'EmploymentNumber',
        'EmploymentSalaryType',
        'EmploymentSalaryTypeDescription',
        'EndDate',
        'ExternalRate',
        'Frequency',
        'FrequencyDescription',
        'FulltimeAmount',
        'HourlyWage',
        'ID',
        'IntercompanyRate',
        'InternalRate',
        'JobLevel',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ParttimeAmount',
        'ParttimeFactor',
        'SalaryBasedType',
        'SalaryBasedTypeDescription',
        'Scale',
        'Schedule',
        'ScheduleCode',
        'ScheduleDescription',
        'StartDate',
        'WageScale',
        'WageScalePeriod',
        'WageScaleStep',
    ];

    protected $url = 'sync/Payroll/EmploymentSalaries';
}
