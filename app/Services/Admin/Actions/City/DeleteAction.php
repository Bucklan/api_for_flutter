<?phpnamespace App\Services\Admin\Actions\City;class DeleteAction{    public function execute(City $city): void    {        $city->delete();    }}