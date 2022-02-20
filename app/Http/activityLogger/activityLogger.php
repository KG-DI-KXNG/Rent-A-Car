<?php

use App\Models\Log;
   /**
   * Log of all activities for record keeping
   *
   * @param array $type
   * @param string $details
   * @return void
   */
  function activitylogger($type, $details)
  {
      $log = new Log();
      $log->user_id = Auth()->id();
      $log->logable_type = "App\Models\\".$type[0];
      $log->logable_id = $type[1];
      $log->details = $details;
      $log->save();
  };
