<?php

declare(strict_types=1);

namespace Liberu\CRM\ClientOnboarding\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $owner_id
 * @property string $client_key
 * @property string $status
 * @property int $health
 * @property array<string, mixed>|null $intake
 */
final class ClientOnboarding extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_client_onboardings';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['intake' => 'array', 'connections' => 'array', 'snapshot' => 'array', 'target_launch_on' => 'date', 'health' => 'integer'];
    }
}
