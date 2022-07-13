<?php

namespace App\Orchid\Screens;

use App\Models\Course;
use App\Models\Staticpage;
use App\Orchid\Layouts\CreateCourseModal;
use App\Orchid\Layouts\CreateStaticpage;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class CourseListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {

        return [
            'courses' => Course::filters()->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Курсы';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Добавить курс')->modal('createCourseModal')
                ->icon('plus')
                ->method('createCourse'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('courses', [
                TD::make('id'),

                TD::make('name_ru', 'Название')->render(function (Course $course) {
                    return Link::make($course->name_ru)
                        ->route('platform.course.edit', $course);
                })->sort(),
                TD::make('status', 'Статус')->sort(),
                TD::make('sort', 'Сортировка')->sort(),
            ]),
            Layout::modal('createCourseModal', CreateCourseModal::class)->title('Добавить курс')->applyButton('Добавить'),

        ];
    }


   public function createCourse(){

   }
}
