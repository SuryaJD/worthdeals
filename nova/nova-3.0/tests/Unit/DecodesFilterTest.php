<?php

namespace Laravel\Nova\Tests\Unit;

use Illuminate\Support\Collection;
use Laravel\Nova\FilterDecoder;
use Laravel\Nova\Query\ApplyFilter;
use Laravel\Nova\Tests\Fixtures\IdFilter;
use Laravel\Nova\Tests\IntegrationTest;

class DecodesFilterTest extends IntegrationTest
{
    public function test_decodes_filters_correctly()
    {
        $filterString = 'W3siSGVtcFxcQ3VzdG9tRmlsdGVyXFxDdXN0b21GaWx0ZXIiOiIifSx7IkFwcFxcTm92YVxcRmlsdGVyc1xcRGF0ZUZpbHRlciI6IjIwMTktMTAtMTQifSx7IkFwcFxcTm92YVxcRmlsdGVyc1xcQWRtaW5GaWx0ZXIiOnsiYWRtaW4iOnRydWUsIm5vcm1pZSI6ZmFsc2V9fSx7IkFwcFxcTm92YVxcRmlsdGVyc1xcVXNlckZpbHRlciI6ImFjdGl2ZSJ9XQ';
        $decoder = new FilterDecoder($filterString);

        $this->assertEquals([
            [
                'Hemp\CustomFilter\CustomFilter' => '',
            ],
            [
                'App\Nova\Filters\DateFilter' => '2019-10-14',
            ],
            [
                'App\Nova\Filters\AdminFilter' => [
                    'admin' => true,
                    'normie' => false,
                ],
            ],
            [
                'App\Nova\Filters\UserFilter' => 'active',
            ],
        ], $decoder->decodeFromBase64String());
    }

    public function test_empty_filter_strings_return_empty_array()
    {
        $filterString = '';
        $decoder = new FilterDecoder($filterString);

        $this->assertEquals([], $decoder->decodeFromBase64String());
    }

    public function test_decoding_and_returning_applied_filters_for_request()
    {
        $filterString = base64_encode(json_encode([
            [
                IdFilter::class => '1',
            ],
        ], true));

        $availableFilters = collect([new IdFilter]);

        $decoder = new FilterDecoder($filterString, $availableFilters);

        $filters = $decoder->filters();
        $this->assertInstanceOf(Collection::class, $filters);
        $this->assertCount(1, $filters);
        $this->assertInstanceOf(ApplyFilter::class, $filters->first());
    }
}
