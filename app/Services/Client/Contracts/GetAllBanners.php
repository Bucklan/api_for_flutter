<?phpnamespace App\Services\Client\Contracts;use Illuminate\Database\Eloquent\Collection;interface GetAllBanners{    public function execute(string $city_id): Collection;}