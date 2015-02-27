<?php

/*
 * Import Driver for type: MilitaryVeteran
 */

class ImportDriver_MilitaryVeteran extends ImportDriver_default {

    /**
     * Constructor
     * @return void
     */
    public function ImportDriver_MilitaryVeteran()
    {
        $this->type = 'MilitaryVeteran';
    }

    /**
     * Process the data so it can be imported into the entry.
     * @param  $value   The value to import
     * @param  $entry_id    If a duplicate is found, an entry ID will be provided.
     * @return The data returned by the field object
     */
    public function import($value, $entry_id = null)
    {
        echo 'not implemented';
    }

    /**
     * Process the data so it can be exported to a CSV
     * @param  $data    The data as provided by the entry
     * @param  $entry_id    The ID of the entry that is exported
     * @return string   A string representation of the data to import into the CSV file
     */
    public function export($data, $entry_id = null)
    {
		$value = trim($data['handle']);

		if (empty($value)) {
			$value = "unknown";
		}

        return $value;
    }

}
