<?php

declare(strict_types=1);

namespace Liberu\CRM\ClientOnboarding\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $onboarding_id @property string $kind @property string $status */
final class ClientOnboardingStep extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_client_onboarding_steps';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['evidence' => 'array', 'completed_at' => 'datetime'];
    }
}
