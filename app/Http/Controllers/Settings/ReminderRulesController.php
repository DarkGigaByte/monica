<?php

namespace App\Http\Controllers\Settings;

use App\ReminderRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReminderRulesController extends Controller
{
    /**
     * Get all the reminder rules.
     */
    public function get()
    {
        $reminderRulesData = collect([]);
        $reminderRules = auth()->user()->account->reminderRules;

        foreach ($reminderRules as $reminderRule) {
            $data = [
                'id' => $reminderRule->id,
                'number_of_days_before' => $reminderRule->number_of_days_before,
                'active' => $reminderRule->active,
            ];
            $reminderRulesData->push($data);
        }

        return $reminderRulesData;
    }

    public function toggle(Request $request, ReminderRule $reminderRule)
    {
        $reminderRule->active = ! $reminderRule->active;
        $reminderRule->save();

        return trans('settings.personalization_reminder_rule_save');
    }
}
