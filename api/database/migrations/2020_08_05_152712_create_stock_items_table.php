<?php

use App\Enums\ComponentCategoryEnum;
use App\Enums\ComponentTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_items', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('init_part_num')->unique();

            $table->string('name')->unique();
            $table->text('description')->nullable();

            $table->enum('component_category', [
                ComponentCategoryEnum::AIRFRAME,
                ComponentCategoryEnum::ENGINE,
                ComponentCategoryEnum::LANDING_GEAR,
                ComponentCategoryEnum::APU,
            ]);

            $table->enum('component_type', [
                ComponentTypeEnum::EXPENDABLE,
                ComponentTypeEnum::LIFE_LIMITED_PARTS,
                ComponentTypeEnum::REPAIRABLE,
                ComponentTypeEnum::ROTABLE,
            ]);

            $table->boolean('is_consumable')->default(false);
            $table->boolean('is_recoverable')->default(false);
            $table->boolean('is_dangerous_goods')->default(false);
            $table->boolean('is_shelf_life_applicable')->default(false);

            $table->unsignedBigInteger('a_t_a_chapter_id');
            $table->foreign('a_t_a_chapter_id')->references('id')->on('a_t_a_chapters');
            $table->index(['a_t_a_chapter_id']);

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
        Schema::dropIfExists('stock_items');
    }
}
