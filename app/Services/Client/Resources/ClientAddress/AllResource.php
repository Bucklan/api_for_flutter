<?phpnamespace App\Services\Client\Resources\ClientAddress;use App\Models\Client;use Illuminate\Http\Request;use Illuminate\Http\Resources\Json\JsonResource;class AllResource extends JsonResource{    public function toArray($request): array    {        /**  @var Client $this */        return [            'id' => $this->id,            'street' => $this->street,            'building' => $this->building,            'apartment' => $this->apartment,        ];    }}