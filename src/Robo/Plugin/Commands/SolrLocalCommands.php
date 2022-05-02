<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local Solr application.
 */
class SolrLocalCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local Solr.
   *
   * @hook on-event dockworker-local-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [
      'errors=0' => 'Reports zero errors. Not an error.',
      'Failed to reserve shared memory' => 'Not a critical error',
    ];
  }

}
