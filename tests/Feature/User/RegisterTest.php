<?php

namespace Tests\Feature\User;

use App\Http\Livewire\RegisterForm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function register_page_contains_register_form_livewire_component()
    {
        $this->get('/register')
            ->assertSeeLivewire('register-form');
    }

    /** @test */
    function guest_can_create_an_account()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'John')
            ->set('email', 'john@example.com')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm');

        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    function name_is_required()
    {
        Livewire::test(RegisterForm::class)
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'required'])
            ->assertSee('The name field is required');
    }

    /** @test */
    function name_requires_min_characters()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'jo')
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'min'])
            ->assertSee('The name must be at least 3 characters');
    }

    /** @test */
    function name_requires_max_characters()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'johncarpenterliveshere')
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'max'])
            ->assertSee('The name may not be greater than 15 characters');
    }

    /** @test */
    function name_requires_only_alpha_num_underscore_characters()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', '.wrong')
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'regex'])
            ->assertSee('The name format is invalid');

        Livewire::test(RegisterForm::class)
            ->set('name', '-wrong')
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'regex'])
            ->assertSee('The name format is invalid');

        Livewire::test(RegisterForm::class)
            ->set('name', ' wrong')
            ->set('email', 'john@email.lan')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'regex'])
            ->assertSee('The name format is invalid');
    }

    /** @test */
    function name_must_be_unique()
    {
        User::create([
            'name' => 'John',
            'email' => 'john@email.lan',
            'password' => '12341234',
        ]);

        Livewire::test(RegisterForm::class)
            ->set('name', 'John')
            ->set('email', 'john@example.com')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['name' => 'unique']);

        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    function email_is_required()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'john')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['email' => 'required'])
            ->assertSee('The email field is required');
    }

    /** @test */
    function email_must_be_valid()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'john')
            ->set('email', 'wrong-email')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['email' => 'email'])
            ->assertSee('The email must be a valid email address');
    }

    /** @test */
    function email_must_be_unique()
    {
        User::create([
            'name' => 'John',
            'email' => 'same@example.com',
            'password' => '12341234',
        ]);

        Livewire::test(RegisterForm::class)
            ->set('name', 'Jane')
            ->set('email', 'same@example.com')
            ->set('password', '12344321')
            ->set('password_confirmation', '12344321')
            ->call('submitForm')
            ->assertHasErrors(['email' => 'unique']);

        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    function password_requires_min_characters()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'john')
            ->set('email', 'john@email.lan')
            ->set('password', '1234567')
            ->set('password_confirmation', '1234567')
            ->call('submitForm')
            ->assertHasErrors(['password' => 'min'])
            ->assertSee('The password must be at least 8 characters');
    }

    /** @test */
    function password_must_be_confirmed()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'john')
            ->set('email', 'john@email.lan')
            ->set('password', '12345678')
            ->set('password_confirmation', '12121212')
            ->call('submitForm')
            ->assertHasErrors(['password' => 'confirmed'])
            ->assertSee('The password confirmation does not match');
    }

    /** @test */
    function password_must_has_no_spaces()
    {
        Livewire::test(RegisterForm::class)
            ->set('name', 'john')
            ->set('email', 'john@email.lan')
            ->set('password', '123 5678')
            ->set('password_confirmation', '123 5678')
            ->call('submitForm')
            ->assertHasErrors(['password' => 'regex'])
            ->assertSee('The password format is invalid');
    }
}
