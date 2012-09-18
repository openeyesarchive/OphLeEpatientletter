<?php

class m120918_094344_drop_unnecessary_fields extends CDbMigration
{
	public function up()
	{
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_recipient_type');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_letter_date');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_created_by');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_recipient_data');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_contact_data');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_date_data');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_letter_body');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_patient_episode_id');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_location_id');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_letter_set');
		$this->dropColumn('et_ophleepatientletter_epatientletter','epatient_person_id');
	}

	public function down()
	{
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_recipient_type',"varchar(255) COLLATE utf8_bin DEFAULT ''");
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_letter_date','date DEFAULT NULL');
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_created_by',"varchar(255) COLLATE utf8_bin DEFAULT ''");
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_recipient_data','text COLLATE utf8_bin');
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_contact_data','text COLLATE utf8_bin');
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_date_data','text COLLATE utf8_bin');
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_letter_body','text COLLATE utf8_bin');
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_patient_episode_id',"varchar(255) COLLATE utf8_bin DEFAULT ''");
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_location_id',"varchar(255) COLLATE utf8_bin DEFAULT ''");
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_letter_set',"varchar(255) COLLATE utf8_bin DEFAULT ''");
		$this->addColumn('et_ophleepatientletter_epatientletter','epatient_person_id',"varchar(255) COLLATE utf8_bin DEFAULT ''");
	}
}
