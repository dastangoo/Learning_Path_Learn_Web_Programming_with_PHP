<?php
trait Audit {
  public function getAuditTrail() {
    return "nothing changed";
  }
}

/**
 *
 */
class Princess
{
    use Audit;
    // General princess class description:
    // soldering, tree climbing, the usual
}
