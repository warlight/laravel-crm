<?php

namespace Tests\Unit;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function dataProviderRoles()
    {
        return [
            ['Admin', 'Admin', true],
            ['Admin', ['admin'], true],
            ['Admin', ['admin', 'manager'], true],
            ['Admin', ['Client', 'manager'], false],
            ['Client', ['Client', 'manager'], true],
            ['Client', ['Admin', 'manager'], false],
        ];
    }

    /**
     * @dataProvider dataProviderRoles
     * @param $roleName
     * @param $testRole
     * @param $expectedResult
     */
    public function testHasAnyRole($roleName, $testRole, $expectedResult)
    {
        $role = Role::where('name', $roleName)->first();
        $user = User::factory()->create([
            'role_id' => $role->id,
        ]);

        $this->assertEquals($expectedResult, $user->hasAnyRole($testRole));
    }
}
