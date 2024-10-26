<?php

namespace App\Traits;

use Throwable;
use Illuminate\Support\Facades\Log;

trait HandleExceptionTrait
{
    public function handleException(callable $callback)
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            Log::error($e);

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
