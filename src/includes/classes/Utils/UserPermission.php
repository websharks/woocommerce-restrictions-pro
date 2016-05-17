<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\s2MemberX\Pro\Classes\Utils;

use WebSharks\WpSharks\s2MemberX\Pro\Classes;
use WebSharks\WpSharks\s2MemberX\Pro\Interfaces;
use WebSharks\WpSharks\s2MemberX\Pro\Traits;
#
use WebSharks\WpSharks\s2MemberX\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\s2MemberX\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;

/**
 * User permission utilities.
 *
 * @since 16xxxx Security gate.
 */
class UserPermission extends SCoreClasses\SCore\Base\Core
{
    /**
     * Permission statuses.
     *
     * @since 16xxxx User permissions.
     *
     * @type array Permission statuses.
     */
    protected $statuses;

    /**
     * Class constructor.
     *
     * @since 16xxxx Security gate.
     *
     * @param Classes\App $App Instance.
     */
    public function __construct(Classes\App $App)
    {
        parent::__construct($App);

        $this->statuses = s::applyFilters('user_permission_statuses', [
            'active'  => __('Active', 's2member-x'),
            'on-hold' => __('On-Hold', 's2member-x'),
        ]);
    }

    /**
     * Permission statuses.
     *
     * @since 16xxxx Security gate.
     *
     * @param bool $include_trashed Include `trashed` status?
     *
     * @return array An array of user permission statuses.
     */
    public function statuses(bool $include_trashed = true): array
    {
        $statuses = $this->statuses;

        if (!$include_trashed) {
            unset($statuses['trashed']); // Exclude.
        }
        return $statuses; // With or without `trashed` status.
    }
}
