namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
class AdmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->name(),
            'lastname' =>  $this->faker->name(),
            'contactnumber' => Str::random(10),
            'emailid' => $this->faker->unique()->safeEmail(),
            'comment' => Str::random(20),
            'meeting'  => random_int(0,1),
        ];
    }
}