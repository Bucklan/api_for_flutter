<?phpnamespace App\Http\Controllers\Client\Common\Banner;use App\Http\Controllers\Controller;use App\Services\Client\Resources as Resources;use App\Services\Client\Contracts;use Illuminate\Http\Request;use Illuminate\Http\Resources\Json\AnonymousResourceCollection;class BannerController extends Controller{    public function index(Request $request): AnonymousResourceCollection    {        $response = app(Contracts\GetAllBanners::class)->execute(            $request->header('City')    );        return Resources\Banner\AllResource::collection($response);    }}