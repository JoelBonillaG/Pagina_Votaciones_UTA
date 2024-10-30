<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'tit_eve'=> 'Gincana 2.0',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis maur1is vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare. 7 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(6)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(9)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, Pepa, Sandia, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference Bas',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(8)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario+',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(4)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad CISCO',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(4)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve'=> 'Gincanasdferf',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(1)->setTime(2, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(2)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
        Event::create([
            'tit_eve'=> 'Gincana',
            'des_eve'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, risus vel efficitur vehicula, mauris magna vehicula enim, sit amet sollicitudin felis mauris vel tortor. Curabitur scelerisque libero nec risus gravida, sed lacinia nisl viverra. Integer hendrerit faucibus purus at congue. Donec volutpat orci nec dapibus vestibulum. Duis vulputate orci eget quam aliquet feugiat. Nulla facilisi. Pellentesque in turpis sapien. Phasellus vulputate, ligula at tempor malesuada, velit leo facilisis lacus, vel sodales ligula justo eu nisi. Fusce feugiat purus neque, ut interdum nulla vehicula a. Ut non ligula ex. Vestibulum tempor orci sit amet ante condimentum, non aliquet risus ornare.',
            'fec_pub_eve'=> now(),
            'fec_ini_eve' => Carbon::now()->addDays(5)->setTime(9, 0),  // Fecha de inicio
            'fec_fin_eve' => Carbon::now()->addDays(5)->setTime(14, 0),  // Fecha de fin
            'tag_eve' => 'FISEI, Juegos, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Campus FISEI, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Tech Conference',
            'des_eve' => 'Una conferencia sobre las últimas tendencias en tecnología y software. Habrá talleres, charlas, y actividades interactivas. Durante tres días, expertos en desarrollo, inteligencia artificial, y ciberseguridad compartirán sus conocimientos con profesionales y estudiantes interesados en el futuro de la tecnología. Además, se presentarán las últimas innovaciones de empresas tecnológicas. El evento contará con áreas de networking y stands de empresas tecnológicas reconocidas a nivel mundial.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(10)->setTime(9, 0),
            'fec_fin_eve' => Carbon::now()->addDays(12)->setTime(18, 0),
            'tag_eve' => 'Tecnología, Conferencias, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Centro de Convenciones, Quito'
        ]);

        Event::create([
            'tit_eve' => 'Hackathon Universitario',
            'des_eve' => 'Competencia de desarrollo de software donde equipos de estudiantes y profesionales trabajarán durante 48 horas para crear soluciones innovadoras a problemas reales. Durante el evento habrá mentores disponibles para apoyar a los participantes. Los ganadores recibirán premios en efectivo y ofertas de pasantías en las empresas patrocinadoras. Además, se brindarán talleres durante la competencia sobre metodologías ágiles, trabajo en equipo y presentación de proyectos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(15)->setTime(8, 0),
            'fec_fin_eve' => Carbon::now()->addDays(17)->setTime(8, 0),
            'tag_eve' => 'Hackathon, Programación, FISEI, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Universidad Técnica, Ambato'
        ]);

        Event::create([
            'tit_eve' => 'Charla de Ciberseguridad',
            'des_eve' => 'Expertos en ciberseguridad discutirán las amenazas actuales y las mejores prácticas para mantener datos seguros en un mundo digital. Se abordarán temas como la protección de redes corporativas, la gestión de vulnerabilidades, y la respuesta ante incidentes. Los asistentes aprenderán sobre los ataques más recientes y las mejores técnicas para defenderse de ellos. La charla incluirá estudios de casos reales y demostraciones en vivo de cómo se llevan a cabo algunos ataques cibernéticos.',
            'fec_pub_eve' => now(),
            'fec_ini_eve' => Carbon::now()->addDays(20)->setTime(10, 0),
            'fec_fin_eve' => Carbon::now()->addDays(20)->setTime(13, 0),
            'tag_eve' => 'Ciberseguridad, Seguridad, 2024',
            'pre_img' => 'assets/images/event/example_preview_event.jpg',
            'res_img' => 'assets/images/resources/example_event.jpg',
            'dir_eve' => 'Auditorio FISEI, Ambato'
        ]);
    }
}