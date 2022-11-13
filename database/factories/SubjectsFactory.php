namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AdmissionModel;

 
class AdmissionFactory extends Factory
{
    protected $model = AdmissionModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subjecttitle' => $this->faker->name().','.$this->faker->name().','$this->faker->name(),
            'value' => random_int(1,15),
        ];
    }
}