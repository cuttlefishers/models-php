<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class JobPosting extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:JobPosting";
    }

    /**
     * The title of the job.
     *
     *
     * @var string
     */
    protected $title;

    /**
     * A (typically single) geographic location associated with the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $jobLocation;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $benefits;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentiveCompensation;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     *
     * @var string
     */
    protected $workHours;

    /**
     * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
     *
     *
     * @var string
     */
    protected $salaryCurrency;

    /**
     * Description of benefits associated with the job.
     *
     *
     * @var string
     */
    protected $jobBenefits;

    /**
     * Publication date for the job posting.
     *
     *
     * @var DateTime|null
     */
    protected $datePosted;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $skills;

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     *
     * @var string
     */
    protected $incentives;

    /**
     * Responsibilities associated with this role or Occupation.
     *
     *
     * @var string
     */
    protected $responsibilities;

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|float|null
     */
    protected $baseSalary;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * Organization offering the job position.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $hiringOrganization;

    /**
     * The Occupation for the JobPosting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Occupation
     */
    protected $relevantOccupation;

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     *
     * @var string
     */
    protected $specialCommitments;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br/><br/>
     * 
     * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    protected $occupationalCategory;

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     *
     * @var string
     */
    protected $experienceRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     *
     * @var string
     */
    protected $employmentType;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     *
     * @var float|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    protected $estimatedSalary;

    /**
     * The industry associated with the job position.
     *
     *
     * @var string
     */
    protected $industry;

    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     *
     *
     * @var int|null
     */
    protected $totalJobOpenings;

    /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $applicantLocationRequirements;

    /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     *
     *
     * @var string|DateTime|null
     */
    protected $jobStartDate;

    /**
     * Educational background needed for the position or Occupation.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    protected $educationRequirements;

    /**
     * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
     *
     *
     * @var string
     */
    protected $jobLocationType;

    /**
     * Specific qualifications required for this role or Occupation.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    protected $qualifications;

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $employmentUnit;

    /**
     * An indicator as to whether a position is available for an immediate start.
     *
     *
     * @var bool|null
     */
    protected $jobImmediateStart;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTitle($title)
    {
        $types = array(
            "string",
        );

        $title = self::checkTypes($title, $types);

        $this->title = $title;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $jobLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobLocation($jobLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $jobLocation = self::checkTypes($jobLocation, $types);

        $this->jobLocation = $jobLocation;
    }

    /**
     * @return string
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * @param string $benefits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBenefits($benefits)
    {
        $types = array(
            "string",
        );

        $benefits = self::checkTypes($benefits, $types);

        $this->benefits = $benefits;
    }

    /**
     * @return string
     */
    public function getIncentiveCompensation()
    {
        return $this->incentiveCompensation;
    }

    /**
     * @param string $incentiveCompensation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentiveCompensation($incentiveCompensation)
    {
        $types = array(
            "string",
        );

        $incentiveCompensation = self::checkTypes($incentiveCompensation, $types);

        $this->incentiveCompensation = $incentiveCompensation;
    }

    /**
     * @return string
     */
    public function getWorkHours()
    {
        return $this->workHours;
    }

    /**
     * @param string $workHours
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkHours($workHours)
    {
        $types = array(
            "string",
        );

        $workHours = self::checkTypes($workHours, $types);

        $this->workHours = $workHours;
    }

    /**
     * @return string
     */
    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    /**
     * @param string $salaryCurrency
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSalaryCurrency($salaryCurrency)
    {
        $types = array(
            "string",
        );

        $salaryCurrency = self::checkTypes($salaryCurrency, $types);

        $this->salaryCurrency = $salaryCurrency;
    }

    /**
     * @return string
     */
    public function getJobBenefits()
    {
        return $this->jobBenefits;
    }

    /**
     * @param string $jobBenefits
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobBenefits($jobBenefits)
    {
        $types = array(
            "string",
        );

        $jobBenefits = self::checkTypes($jobBenefits, $types);

        $this->jobBenefits = $jobBenefits;
    }

    /**
     * @return DateTime|null
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * @param DateTime|null $datePosted
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePosted($datePosted)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $datePosted = self::checkTypes($datePosted, $types);

        $this->datePosted = $datePosted;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $skills
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSkills($skills)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $skills = self::checkTypes($skills, $types);

        $this->skills = $skills;
    }

    /**
     * @return string
     */
    public function getIncentives()
    {
        return $this->incentives;
    }

    /**
     * @param string $incentives
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncentives($incentives)
    {
        $types = array(
            "string",
        );

        $incentives = self::checkTypes($incentives, $types);

        $this->incentives = $incentives;
    }

    /**
     * @return string
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * @param string $responsibilities
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResponsibilities($responsibilities)
    {
        $types = array(
            "string",
        );

        $responsibilities = self::checkTypes($responsibilities, $types);

        $this->responsibilities = $responsibilities;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|float|null
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PriceSpecification|\OpenActive\Models\SchemaOrg\MonetaryAmount|float|null $baseSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBaseSalary($baseSalary)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\PriceSpecification",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "float",
            "null",
        );

        $baseSalary = self::checkTypes($baseSalary, $types);

        $this->baseSalary = $baseSalary;
    }

    /**
     * @return DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param DateTime|null $validThrough
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $hiringOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHiringOrganization($hiringOrganization)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $hiringOrganization = self::checkTypes($hiringOrganization, $types);

        $this->hiringOrganization = $hiringOrganization;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Occupation
     */
    public function getRelevantOccupation()
    {
        return $this->relevantOccupation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Occupation $relevantOccupation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRelevantOccupation($relevantOccupation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Occupation",
        );

        $relevantOccupation = self::checkTypes($relevantOccupation, $types);

        $this->relevantOccupation = $relevantOccupation;
    }

    /**
     * @return string
     */
    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    /**
     * @param string $specialCommitments
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecialCommitments($specialCommitments)
    {
        $types = array(
            "string",
        );

        $specialCommitments = self::checkTypes($specialCommitments, $types);

        $this->specialCommitments = $specialCommitments;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|string
     */
    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|string $occupationalCategory
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOccupationalCategory($occupationalCategory)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "string",
        );

        $occupationalCategory = self::checkTypes($occupationalCategory, $types);

        $this->occupationalCategory = $occupationalCategory;
    }

    /**
     * @return string
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * @param string $experienceRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExperienceRequirements($experienceRequirements)
    {
        $types = array(
            "string",
        );

        $experienceRequirements = self::checkTypes($experienceRequirements, $types);

        $this->experienceRequirements = $experienceRequirements;
    }

    /**
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * @param string $employmentType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmploymentType($employmentType)
    {
        $types = array(
            "string",
        );

        $employmentType = self::checkTypes($employmentType, $types);

        $this->employmentType = $employmentType;
    }

    /**
     * @return float|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|null
     */
    public function getEstimatedSalary()
    {
        return $this->estimatedSalary;
    }

    /**
     * @param float|\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution|\OpenActive\Models\SchemaOrg\MonetaryAmount|null $estimatedSalary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEstimatedSalary($estimatedSalary)
    {
        $types = array(
            "float",
            "\OpenActive\Models\SchemaOrg\MonetaryAmountDistribution",
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
            "null",
        );

        $estimatedSalary = self::checkTypes($estimatedSalary, $types);

        $this->estimatedSalary = $estimatedSalary;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param string $industry
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIndustry($industry)
    {
        $types = array(
            "string",
        );

        $industry = self::checkTypes($industry, $types);

        $this->industry = $industry;
    }

    /**
     * @return int|null
     */
    public function getTotalJobOpenings()
    {
        return $this->totalJobOpenings;
    }

    /**
     * @param int|null $totalJobOpenings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalJobOpenings($totalJobOpenings)
    {
        $types = array(
            "int",
            "null",
        );

        $totalJobOpenings = self::checkTypes($totalJobOpenings, $types);

        $this->totalJobOpenings = $totalJobOpenings;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getApplicantLocationRequirements()
    {
        return $this->applicantLocationRequirements;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $applicantLocationRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setApplicantLocationRequirements($applicantLocationRequirements)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $applicantLocationRequirements = self::checkTypes($applicantLocationRequirements, $types);

        $this->applicantLocationRequirements = $applicantLocationRequirements;
    }

    /**
     * @return string|DateTime|null
     */
    public function getJobStartDate()
    {
        return $this->jobStartDate;
    }

    /**
     * @param string|DateTime|null $jobStartDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobStartDate($jobStartDate)
    {
        $types = array(
            "string",
            "DateTime",
            "null",
        );

        $jobStartDate = self::checkTypes($jobStartDate, $types);

        $this->jobStartDate = $jobStartDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string
     */
    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EducationalOccupationalCredential|string $educationRequirements
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationRequirements($educationRequirements)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
            "string",
        );

        $educationRequirements = self::checkTypes($educationRequirements, $types);

        $this->educationRequirements = $educationRequirements;
    }

    /**
     * @return string
     */
    public function getJobLocationType()
    {
        return $this->jobLocationType;
    }

    /**
     * @param string $jobLocationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobLocationType($jobLocationType)
    {
        $types = array(
            "string",
        );

        $jobLocationType = self::checkTypes($jobLocationType, $types);

        $this->jobLocationType = $jobLocationType;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential $qualifications
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQualifications($qualifications)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\EducationalOccupationalCredential",
        );

        $qualifications = self::checkTypes($qualifications, $types);

        $this->qualifications = $qualifications;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getEmploymentUnit()
    {
        return $this->employmentUnit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $employmentUnit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEmploymentUnit($employmentUnit)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $employmentUnit = self::checkTypes($employmentUnit, $types);

        $this->employmentUnit = $employmentUnit;
    }

    /**
     * @return bool|null
     */
    public function getJobImmediateStart()
    {
        return $this->jobImmediateStart;
    }

    /**
     * @param bool|null $jobImmediateStart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setJobImmediateStart($jobImmediateStart)
    {
        $types = array(
            "bool",
            "null",
        );

        $jobImmediateStart = self::checkTypes($jobImmediateStart, $types);

        $this->jobImmediateStart = $jobImmediateStart;
    }

}
