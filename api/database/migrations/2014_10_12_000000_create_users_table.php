<?php

use App\Enums\EntityEnum;
use App\Enums\UserRoleEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->string('avatar')->nullable();

            $table->enum('entity', [
                EntityEnum::SYSTEM,
                EntityEnum::ADMIN,
                EntityEnum::PART_145,
                EntityEnum::CAMO,
                EntityEnum::QA,
                EntityEnum::MCC,
                EntityEnum::STOCK,
                EntityEnum::SCHOOL,
                EntityEnum::CREW_MEMBER,
            ]);

            $table->enum('role', [
                UserRoleEnum::SYSTEM,
                UserRoleEnum::ADMIN,
                UserRoleEnum::ENGINEER,
                UserRoleEnum::TECHNICIAN,
                UserRoleEnum::CAPTAIN,
            ]);

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('timezone')->default('UTC');

            $table->boolean('is_active')->default(true);

            $table->timestamp('last_seen_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();


            $table->unsignedBigInteger('user_id')->nullable();


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
