<?phpnamespace App\Services\Client\Requests\ClientAddress;use Illuminate\Foundation\Http\FormRequest;class StoreRequest extends FormRequest{    public function authorize()    {        return auth()->check();    }    public function rules()    {        return [            'city_id' =>'required|numeric|exists:cities,id',            'street' => 'required|string',            'building' => 'required|string',            'apartment' => 'required|string',        ];    }}