<?php

use App\Document;
use App\User;
use Illuminate\Database\Seeder;

class AdjustmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user     = User::first();
        $document = Document::first();

        $document->title = 'Some new title';

        $original = $document->fresh()->toArray();
        $changed  = $document->getDirty();

        $before = json_encode(array_intersect_key($original, $changed));
        $after  = json_encode($changed);

        $document->storeAdjustments($user->id, [
            'before' => json_encode($before),
            'after'  => json_encode($after),
        ]);

        $document->save();
    }
}
