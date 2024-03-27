<?php
/**
 * @return string при необходимости можно сделать рандомизацию даты для отзывов
 */
function randDate(){
    $timestamp = rand( strtotime("Dec 01 2017"), getdate()[0]); //временные рамки от указаной даты до сегодня
    $date = explode('.', date("d.F.Y", $timestamp ));

    return $date[0] . '. ' . $date[1] . ' ' . $date[2];
}

$feedbacksItems = [
    [
        'date' => randDate(),
        'autorID' => '253898',
        'subject'  => 'Bilogy',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',

    ],
    [
        'date' => '29. August 2019',
        'autorID' => '220101',
        'subject'  => 'History',
        'text' => ' nostrud exercitation  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”',

    ],
    [
        'date' => '17. September 2019',
        'autorID' => '253021',
        'subject'  => 'Law',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
    ],
    [
        'date' => '19. August 2019',
        'autorID' => '252562',
        'subject'  => 'Psychology',
        'text' => 'ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',

    ],
    [
        'date' => '27. September 2019',
        'autorID' => '250057',
        'subject'  => 'Marketing',
        'text' => ' nostrud exercitation  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”',
    ],
    [
        'date' => '01. October 2019',
        'autorID' => '239298',
        'subject'  => 'Mathematics',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis',
    ]
];
?>

<section class="feedbacks" id="feedbacks">
    <div class="container">
        <h2 class="section-title ">Customers feedback</h2>
        <div class="feedbacks__flex js-feedbacks-slider">
            <?php foreach ($feedbacksItems as $item) : ?>
                <div class="feedbacks__item feedback">
                    <div class="feedback__autor">
                        <span class="regular-text">Author ID: </span>
                        <?php echo '#' . $item['autorID']; ?>
                    </div>

                    <div class="feedback__subject">
                        <span class="regular-text">Subject: </span>
                        <?php echo $item['subject']; ?>
                    </div>

                    <div class="feedback__text">
                        <?php echo $item["text"]; ?>
                    </div>

                    <div class="feedback__footer">
                        <div class="feedback__rating stars-wrap">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>

                        <div class="feedback__time">
                            <?php echo $item['date']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="feedbacks__btn-wrp btn-wrp">
            <a href="/order" rel="nofollow" class="button">Order</a>
        </div>
    </div>
</section>