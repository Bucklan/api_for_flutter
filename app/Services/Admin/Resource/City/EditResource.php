<?phpnamespace App\Services\Admin\Resource\City;use App\Models\City;use Illuminate\Http\Request;use Illuminate\Http\Resources\Json\JsonResource;class EditResource extends JsonResource{    public function toArray(Request $request)    {        /** @var City $this */        return [            'id' => $this->id,            'name' => $this->getOriginal('name'),        ];    }}