<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace YourSchool{
/**
 * YourSchool\Address
 *
 * @property int $id
 * @property string $public_place
 * @property string $local_type
 * @property string $district
 * @property string $complement
 * @property int $number
 * @property string $state
 * @property string $city
 * @property string $zip_code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\Person[] $people
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereComplement($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereDistrict($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereLocalType($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address wherePublicPlace($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Address whereZipCode($value)
 */
	class Address extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\AnnualNote
 *
 * @property int $id
 * @property float $note
 * @property string $teacher_name
 * @property int $lesson_id
 * @property int $student_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereLessonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereStudentId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereTeacherName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\AnnualNote whereUpdatedAt($value)
 */
	class AnnualNote extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Bimester
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Bimester whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Bimester whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Bimester whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Bimester whereUpdatedAt($value)
 */
	class Bimester extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\BimonthlyNote
 *
 * @property int $id
 * @property float $note
 * @property string $teacher_name
 * @property int $bimester_id
 * @property int $lesson_id
 * @property int $student_id
 * @property int $types_note_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereBimesterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereLessonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereStudentId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereTeacherName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereTypesNoteId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BimonthlyNote whereUpdatedAt($value)
 */
	class BimonthlyNote extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\BooksTeam
 *
 * @property int $id
 * @property int $school_year
 * @property int $lesson_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BooksTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BooksTeam whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BooksTeam whereLessonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BooksTeam whereSchoolYear($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\BooksTeam whereUpdatedAt($value)
 */
	class BooksTeam extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\DailyTeam
 *
 * @property int $id
 * @property int $bimester_id
 * @property int $books_team_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\DailyTeam whereBimesterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\DailyTeam whereBooksTeamId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\DailyTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\DailyTeam whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\DailyTeam whereUpdatedAt($value)
 */
	class DailyTeam extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Frequency
 *
 * @property int $id
 * @property int $records_lesson_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Frequency whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Frequency whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Frequency whereRecordsLessonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Frequency whereUpdatedAt($value)
 */
	class Frequency extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\LegalEntity
 *
 * @property int $id
 * @property string $cnpj
 * @property string $ie
 * @property string $number_mac
 * @property string $foundation_date
 * @property int $person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \YourSchool\Person $person
 * @property-read \YourSchool\School $school
 * @property-read \YourSchool\SecretaryOfEducation $secretary_of_education
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereCnpj($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereFoundationDate($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereIe($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereNumberMac($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity wherePersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\LegalEntity whereUpdatedAt($value)
 */
	class LegalEntity extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Lesson
 *
 * @property int $id
 * @property string $name
 * @property int $matter_id
 * @property int $team_id
 * @property int $teacher_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereMatterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereTeacherId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereTeamId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Lesson whereUpdatedAt($value)
 */
	class Lesson extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Matter
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Matter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Matter whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Matter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Matter whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Matter whereUpdatedAt($value)
 */
	class Matter extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\NotesAssigned
 *
 * @property int $id
 * @property float $note
 * @property string $teacher_name
 * @property int $bimester_id
 * @property int $lesson_id
 * @property int $student_id
 * @property int $types_note_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereBimesterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereLessonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereStudentId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereTeacherName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereTypesNoteId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\NotesAssigned whereUpdatedAt($value)
 */
	class NotesAssigned extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Person
 *
 * @property int $id
 * @property string $name
 * @property string $phone_1
 * @property string $phone_2
 * @property int $address_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \YourSchool\Address $address
 * @property-read mixed|string $city
 * @property-read mixed|string $complement
 * @property-read mixed|string $cpf
 * @property-read mixed|string $date_of_birth
 * @property-read mixed|string $district
 * @property-read mixed|string $local_type
 * @property-read int|mixed $number
 * @property-read mixed|string $public_place
 * @property-read mixed|string $rg
 * @property-read mixed|string $state
 * @property-read mixed|string $zip_code
 * @property-read \YourSchool\LegalEntity $legal_entity
 * @property-read \YourSchool\PhysicalPerson $physical_person
 * @property-read \YourSchool\User $user
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereAddressId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person wherePhone1($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person wherePhone2($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Person whereUserId($value)
 */
	class Person extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\PhysicalPerson
 *
 * @property int $id
 * @property string $cpf
 * @property string $rg
 * @property string $date_of_birth
 * @property int $person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \YourSchool\Person $person
 * @property-read \YourSchool\SchoolSecretary $school_secretaries
 * @property-read \YourSchool\Student $student
 * @property-read \YourSchool\Person $teacher
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereCpf($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereDateOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson wherePersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereRg($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\PhysicalPerson whereUpdatedAt($value)
 */
	class PhysicalPerson extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\RecordsLesson
 *
 * @property int $id
 * @property string $description
 * @property string $date_lesson
 * @property int $daily_team_id
 * @property int $subject_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereDailyTeamId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereDateLesson($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereSubjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\RecordsLesson whereUpdatedAt($value)
 */
	class RecordsLesson extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Responsible
 *
 * @property int $id
 * @property int $physical_person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Responsible whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Responsible whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Responsible wherePhysicalPersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Responsible whereUpdatedAt($value)
 */
	class Responsible extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\School
 *
 * @property int $id
 * @property int $legal_entity_id
 * @property int $secretary_of_education_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $city
 * @property-read mixed $cnpj
 * @property-read mixed $complement
 * @property-read mixed $district
 * @property-read mixed $email
 * @property-read mixed $foundation_date
 * @property-read mixed $ie
 * @property-read mixed $local_type
 * @property-read mixed $name
 * @property-read mixed $number
 * @property-read mixed $phone1
 * @property-read mixed $phone2
 * @property-read mixed $public_place
 * @property-read mixed $state
 * @property-read mixed $zip_code
 * @property-read \YourSchool\LegalEntity $legal_entity
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\Team[] $teams
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\School whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\School whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\School whereLegalEntityId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\School whereSecretaryOfEducationId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\School whereUpdatedAt($value)
 */
	class School extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\SchoolGrade
 *
 * @property int $id
 * @property string $name
 * @property int $types_team_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolGrade whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolGrade whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolGrade whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolGrade whereTypesTeamId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolGrade whereUpdatedAt($value)
 */
	class SchoolGrade extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\SchoolSecretary
 *
 * @property int $id
 * @property int $school_id
 * @property int $physical_person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolSecretary whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolSecretary whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolSecretary wherePhysicalPersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolSecretary whereSchoolId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SchoolSecretary whereUpdatedAt($value)
 */
	class SchoolSecretary extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\SecretaryOfEducation
 *
 * @property int $id
 * @property int $legal_entity_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $name
 * @property-read \YourSchool\LegalEntity $legal_entity
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\School[] $schools
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SecretaryOfEducation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SecretaryOfEducation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SecretaryOfEducation whereLegalEntityId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\SecretaryOfEducation whereUpdatedAt($value)
 */
	class SecretaryOfEducation extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Student
 *
 * @property int $id
 * @property bool $studying
 * @property int $physical_person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed|string $city
 * @property-read mixed|string $complement
 * @property-read int|mixed $cpf
 * @property-read mixed|string $date_of_birth
 * @property-read mixed|string $district
 * @property-read mixed $email
 * @property-read mixed|string $local_type
 * @property-read mixed|string $name
 * @property-read int|mixed $number
 * @property-read mixed|string $phone1
 * @property-read mixed|string $phone2
 * @property-read mixed|string $public_place
 * @property-read int|mixed $rg
 * @property-read mixed|string $state
 * @property-read mixed|string $zip_code
 * @property-read \YourSchool\PhysicalPerson $physical_person
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\Team[] $teams
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Student whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Student wherePhysicalPersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Student whereStudying($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Subject
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $matter_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereMatterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Teacher
 *
 * @property int $id
 * @property int $physical_person_id
 * @property int $matter_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed|string $city
 * @property-read mixed|string $complement
 * @property-read int|mixed $cpf
 * @property-read mixed|string $date_of_birth
 * @property-read mixed|string $district
 * @property-read mixed $email
 * @property-read mixed|string $local_type
 * @property-read mixed|string $name
 * @property-read int|mixed $number
 * @property-read mixed|string $phone1
 * @property-read mixed|string $phone2
 * @property-read mixed|string $public_place
 * @property-read int|mixed $rg
 * @property-read mixed|string $state
 * @property-read mixed|string $zip_code
 * @property-read \YourSchool\PhysicalPerson $physical_person
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Teacher whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Teacher whereMatterId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Teacher wherePhysicalPersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Teacher whereUpdatedAt($value)
 */
	class Teacher extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\Team
 *
 * @property int $id
 * @property string $name
 * @property bool $finished
 * @property int $school_grade_id
 * @property int $school_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\Lesson[] $lessons
 * @property-read \YourSchool\School $school
 * @property-read \YourSchool\SchoolGrade $school_grade
 * @property-read \Illuminate\Database\Eloquent\Collection|\YourSchool\Student[] $students
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereFinished($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereSchoolGradeId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereSchoolId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\Team whereUpdatedAt($value)
 */
	class Team extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\TypesNote
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesNote whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesNote whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesNote whereUpdatedAt($value)
 */
	class TypesNote extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\TypesTeam
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesTeam whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesTeam whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesTeam whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\TypesTeam whereUpdatedAt($value)
 */
	class TypesTeam extends \Eloquent {}
}

namespace YourSchool{
/**
 * YourSchool\User
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \YourSchool\Person $person
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\YourSchool\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

