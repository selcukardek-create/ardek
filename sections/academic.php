<?php
/**
 * Akademik Section - Etkinlik Takvimi
 */

$events = [
    1 => [],
    4 => [
        ['time' => '17:00', 'title' => 'Selçuk English Speaking Day'],
        ['more' => '+3 daha fazla']
    ],
    10 => [
        ['time' => '17:00', 'title' => 'Selçuk English Speaking Day'],
        ['more' => '+3 daha fazla']
    ],
    15 => [
        ['time' => '10:00', 'title' => 'ESC30 Proje Bilgilendirme ve Atölye']
    ],
    16 => [
        ['time' => '10:00', 'title' => 'ESC30 Proje Bilgilendirme ve Atölye']
    ],
    17 => [
        ['time' => '10:00', 'title' => 'English Book Club']
    ],
    18 => [
        ['time' => '17:00', 'title' => 'Selçuk English Speaking Day']
    ],
    24 => [
        ['time' => '10:00', 'title' => 'English Book Club']
    ],
    25 => [
        ['time' => '17:00', 'title' => 'Selçuk English Speaking Day']
    ]
];

$monthName = 'Aralık 2025';
$weekdays = ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Paz'];
$daysInMonth = 31;
$firstWeekdayIndex = 0; // 1 Aralık 2025 Pazartesi
?>

<!-- AKADEMİK SECTION -->
<section class="academic section" id="akademik">
    <div class="container">
        <div class="academic-section-header">
            <div class="academic-header-left">
                <h2 class="academic-title">ETKİNLİK TAKVİMİ</h2>
                           </div>
        </div>

        <div class="calendar-card">
            <div class="calendar-header">
                <div class="calendar-nav">
                    <button class="cal-btn">&lt;</button>
                    <button class="cal-btn">&gt;</button>
                </div>
                <h3 class="calendar-title"><?php echo $monthName; ?></h3>
                <div class="calendar-view-buttons">
                    <button class="cal-view-btn active">Ay</button>
                    <button class="cal-view-btn">Hafta</button>
                    <button class="cal-view-btn">Gün</button>
                    <button class="cal-view-btn">Liste</button>
                </div>
            </div>

            <div class="calendar-weekdays">
                <?php foreach ($weekdays as $day): ?>
                    <div><?php echo $day; ?></div>
                <?php endforeach; ?>
            </div>

            <div class="calendar-grid">
                <?php
                // Aralık 2025 pazartesi başladığı için 5 hafta yeterli
                $cellCount = 35; // 5 hafta * 7 gün
                for ($cell = 0; $cell < $cellCount; $cell++):
                    $dayNumber = $cell - $firstWeekdayIndex + 1;
                    $isCurrentMonth = $dayNumber >= 1 && $dayNumber <= $daysInMonth;
                ?>
                <div class="calendar-cell <?php echo $isCurrentMonth ? '' : 'calendar-cell--muted'; ?>">
                    <?php if ($isCurrentMonth): ?>
                        <div class="calendar-date"><?php echo $dayNumber; ?></div>
                        <?php if (isset($events[$dayNumber])): ?>
                            <div class="calendar-events">
                                <?php foreach ($events[$dayNumber] as $event): ?>
                                    <?php if (isset($event['more'])): ?>
                                        <div class="calendar-event more"><?php echo $event['more']; ?></div>
                                    <?php else: ?>
                                        <div class="calendar-event">
                                            <span class="dot"></span>
                                            <span class="time"><?php echo $event['time']; ?></span>
                                            <span class="title"><?php echo $event['title']; ?></span>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
