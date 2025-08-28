<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default setting
        Setting::firstOrCreate([
            'header_logo' => ''
        ]);


        // Create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create Super Admin
        $admin = Admin::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'), // Change it in production
            ]
        );

        // Create super-admin role
        $role = Role::firstOrCreate(
            ['name' => 'super-admin', 'guard_name' => 'admin']
        );

        // Define all permissions
        $permissions = [
            'create dashboard',
            'edit dashboard',
            'view dashboard',
            'delete dashboard',

            // role permissions
            'create role',
            'edit role',
            'view role',
            'delete role',

            // permission permissions
            'create permission',
            'edit permission',
            'view permission',
            'delete permission',


            // user permissions
            'create user',
            'edit user',
            'view user',
            'delete user',


            // banner permissions
            'create banner',
            'edit banner',
            'view banner',
            'delete banner',

            // about permissions
            'create about',
            'edit about',
            'view about',
            'delete about',


            // service permissions
            'create service',
            'edit service',
            'view service',
            'delete service',


            // service-item permissions
            'create service-item',
            'edit service-item',
            'view service-item',
            'delete service-item',


            // portfolio-category permissions
            'create portfolio-category',
            'edit portfolio-category',
            'view portfolio-category',
            'delete portfolio-category',


            // portfolio permissions
            'create portfolio',
            'edit portfolio',
            'view portfolio',
            'delete portfolio',


            // blog permissions
            'create blog',
            'edit blog',
            'view blog',
            'delete blog',

            // testimonial permissions
            'create testimonial',
            'edit testimonial',
            'view testimonial',
            'delete testimonial',

            // team permissions
            'create team',
            'edit team',
            'view team',
            'delete team',


            // contact permissions
            'create contact',
            'edit contact',
            'view contact',
            'delete contact',


            // page permissions
            'create page',
            'edit page',
            'view page',
            'delete page',

            // welcome permissions
            'create welcome',
            'edit welcome',
            'view welcome',
            'delete welcome',


            // whychoose permissions
            'create whychoose',
            'edit whychoose',
            'view whychoose',
            'delete whychoose',


            // faq-category permissions
            'create faq-category',
            'edit faq-category',
            'view faq-category',
            'delete faq-category',


            // faq permissions
            'create faq',
            'edit faq',
            'view faq',
            'delete faq',


            // section-title permissions
            'create section-title',
            'edit section-title',
            'view section-title',
            'delete section-title',


            // setting permissions
            'create setting',
            'edit setting',
            'view setting',
            'delete setting',



        ];

        // Create and assign permissions to role
        foreach ($permissions as $perm) {
            $permission = Permission::firstOrCreate([
                'name' => $perm,
                'guard_name' => 'admin'
            ]);

            // Assign permission to role if not already assigned
            if (!$role->hasPermissionTo($permission)) {
                $role->givePermissionTo($permission);
            }
        }

        // Assign role to admin
        if (!$admin->hasRole($role)) {
            $admin->assignRole($role);
        }
    }
}
