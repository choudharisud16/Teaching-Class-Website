namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ClassesModel;

 
class AdmissionFactory extends Factory
{
    protected $model = ClassesModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'capacity' => random_int(1,10),
            'fromtime' => Str::random(10),
            'totime' => $this->faker->unique()->safeEmail(),
        ];
    }
}