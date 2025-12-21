<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use function Symfony\Component\Clock\now;

class HumanResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'Human Resources',
                'description' => 'Responsible for employee recruitment, onboarding, performance management, training, and employee relations across the organization.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-01-10 09:00:00'),
                'updated_at' => Carbon::parse('2024-06-15 10:20:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Finance',
                'description' => 'Manages financial planning, budgeting, accounting, payroll, taxation, and financial reporting to ensure organizational sustainability.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-01-10 09:05:00'),
                'updated_at' => Carbon::parse('2024-06-18 14:30:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Information Technology',
                'description' => 'Handles system development, infrastructure, cybersecurity, technical support, and digital transformation initiatives.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-02-01 08:45:00'),
                'updated_at' => Carbon::parse('2024-07-01 16:10:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Operations',
                'description' => 'Oversees daily operational activities, process optimization, service delivery, and inter-department coordination.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-02-15 09:30:00'),
                'updated_at' => Carbon::parse('2024-06-25 11:00:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Marketing',
                'description' => 'Responsible for branding, market research, digital marketing, campaign execution, and customer engagement strategies.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-03-05 10:00:00'),
                'updated_at' => Carbon::parse('2024-07-03 15:45:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Sales',
                'description' => 'Focuses on client acquisition, relationship management, revenue generation, and achievement of sales targets.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-03-05 10:10:00'),
                'updated_at' => Carbon::parse('2024-06-28 13:20:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Customer Support',
                'description' => 'Provides assistance to customers, handles inquiries and complaints, and ensures high levels of customer satisfaction.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-04-01 09:00:00'),
                'updated_at' => Carbon::parse('2024-06-20 09:50:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Research and Development',
                'description' => 'Conducts research, innovation, and product or service development to support long-term organizational growth.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-05-10 08:30:00'),
                'updated_at' => Carbon::parse('2024-07-05 17:00:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Legal and Compliance',
                'description' => 'Ensures organizational compliance with laws, regulations, internal policies, and manages legal risks.',
                'status' => 'active',
                'created_at' => Carbon::parse('2022-06-01 09:15:00'),
                'updated_at' => Carbon::parse('2024-06-22 10:40:00'),
                'deleted_at' => null,
            ],
            [
                'name' => 'Procurement',
                'description' => 'Manages purchasing processes, vendor relationships, contract negotiations, and cost efficiency initiatives.',
                'status' => 'inactive',
                'created_at' => Carbon::parse('2022-06-15 09:00:00'),
                'updated_at' => Carbon::parse('2023-12-10 14:00:00'),
                'deleted_at' => null,
            ],
        ]);

        DB::table('roles')->insert([
            [
                'title' => 'Manager',
                'description' => 'Responsible for supervising teams, planning work, and making strategic decisions.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Staff',
                'description' => 'Handles daily operational tasks and executes assigned responsibilities.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Intern',
                'description' => 'Supports teams while gaining practical work experience.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);

        DB::table('employees')->insert([
            [
                'fullname' => 'Andi Pratama',
                'email' => 'andi.pratama@company.com',
                'phone_number' => '081234567801',
                'address' => 'Jakarta',
                'birth_date' => '1990-03-15',
                'hire_date' => '2020-01-10',
                'department_id' => 1,
                'role_id' => 1,
                'status' => 'active',
                'salary' => 15000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'fullname' => 'Siti Rahmawati',
                'email' => 'siti.rahmawati@company.com',
                'phone_number' => '081234567802',
                'address' => 'Bandung',
                'birth_date' => '1994-07-21',
                'hire_date' => '2021-06-01',
                'department_id' => 2,
                'role_id' => 2,
                'status' => 'active',
                'salary' => 9000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'fullname' => 'Budi Santoso',
                'email' => 'budi.santoso@company.com',
                'phone_number' => '081234567803',
                'address' => 'Surabaya',
                'birth_date' => '1992-11-10',
                'hire_date' => '2019-09-15',
                'department_id' => 3,
                'role_id' => 2,
                'status' => 'active',
                'salary' => 8500000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'fullname' => 'Dewi Lestari',
                'email' => 'dewi.lestari@company.com',
                'phone_number' => '081234567804',
                'address' => 'Yogyakarta',
                'birth_date' => '1996-05-02',
                'hire_date' => '2022-02-01',
                'department_id' => 1,
                'role_id' => 2,
                'status' => 'active',
                'salary' => 8000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'fullname' => 'Rizky Maulana',
                'email' => 'rizky.maulana@company.com',
                'phone_number' => '081234567805',
                'address' => 'Malang',
                'birth_date' => '2001-01-18',
                'hire_date' => '2024-01-05',
                'department_id' => 2,
                'role_id' => 3,
                'status' => 'active',
                'salary' => 4000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);

        DB::table('tasks')->insert([
            [
                'title' => 'Prepare Monthly Report',
                'description' => 'Compile and analyze monthly department performance data.',
                'assigned_to' => 1,
                'due_date' => Carbon::now()->addDays(7),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'title' => 'Update Employee Records',
                'description' => 'Ensure all employee data is up to date.',
                'assigned_to' => 2,
                'due_date' => Carbon::now()->addDays(5),
                'status' => 'in_progress',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);

        DB::table('payrolls')->insert([
            [
                'employee_id' => 1,
                'salary' => 15000000,
                'bonuses' => 2000000,
                'deductions' => 500000,
                'net_salary' => 16500000,
                'pay_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'salary' => 9000000,
                'bonuses' => null,
                'deductions' => 300000,
                'net_salary' => 8700000,
                'pay_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('presences')->insert([
            [
                'employee_id' => 1,
                'check_in' => now(),
                'check_out' => now(),
                'date' => now(),
                'status' => 'present',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'employee_id' => 3,
                'check_in' => now(),
                'check_out' => now(),
                'date' => now(),
                'status' => 'present',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);

        DB::table('leave_requests')->insert([
            [
                'employee_id' => 2,
                'leave_type' => 'Annual Leave',
                'start_date' => now(),
                'end_date' => now(),
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
