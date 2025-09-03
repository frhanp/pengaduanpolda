# Project Digest (Full Content)
_Generated: 2025-09-02 23:55:41_
**Root:** D:\Laragon\www\pengaduanpolda


## Struktur Proyek (filtered, no depth limit)
```
.git
app
bootstrap
config
database
node_modules
public
resources
routes
storage
tests
vendor
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
digest.ps1
package-lock.json
package.json
phpunit.xml
postcss.config.js
project_digest_full.md
README.md
tailwind.config.js
vite.config.js
app\Enums
app\Events
app\Http
app\Listeners
app\Mail
app\Models
app\Providers
app\View
app\Enums\UserRole.php
app\Events\StatusDiubah.php
app\Http\Controllers
app\Http\Middleware
app\Http\Requests
app\Http\Controllers\Admin
app\Http\Controllers\Auth
app\Http\Controllers\Reskrim
app\Http\Controllers\Controller.php
app\Http\Controllers\PengaduanController.php
app\Http\Controllers\ProfileController.php
app\Http\Controllers\UserController.php
app\Http\Controllers\Admin\DashboardController.php
app\Http\Controllers\Admin\StplController.php
app\Http\Controllers\Auth\AuthenticatedSessionController.php
app\Http\Controllers\Auth\ConfirmablePasswordController.php
app\Http\Controllers\Auth\EmailVerificationNotificationController.php
app\Http\Controllers\Auth\EmailVerificationPromptController.php
app\Http\Controllers\Auth\NewPasswordController.php
app\Http\Controllers\Auth\PasswordController.php
app\Http\Controllers\Auth\PasswordResetLinkController.php
app\Http\Controllers\Auth\RegisteredUserController.php
app\Http\Controllers\Auth\VerifyEmailController.php
app\Http\Controllers\Reskrim\DashboardController.php
app\Http\Controllers\Reskrim\SuratPernyataanController.php
app\Http\Middleware\Role.php
app\Http\Middleware\RoleMiddleware.php
app\Http\Requests\Auth
app\Http\Requests\ProfileUpdateRequest.php
app\Http\Requests\StorePengaduanRequest.php
app\Http\Requests\Auth\LoginRequest.php
app\Listeners\KirimNotifikasiStatus.php
app\Mail\PengaduanDiperbaiki.php
app\Mail\PengaduanReceived.php
app\Mail\StatusDiperbarui.php
app\Models\BuktiPengaduan.php
app\Models\Pengaduan.php
app\Models\RiwayatStatus.php
app\Models\Stpl.php
app\Models\SuratPernyataan.php
app\Models\User.php
app\Providers\AppServiceProvider.php
app\View\Components
app\View\Components\AppLayout.php
app\View\Components\GuestLayout.php
bootstrap\cache
bootstrap\app.php
bootstrap\providers.php
bootstrap\cache\.gitignore
bootstrap\cache\pac271.tmp
bootstrap\cache\packages.php
bootstrap\cache\services.php
config\app.php
config\auth.php
config\cache.php
config\database.php
config\filesystems.php
config\logging.php
config\mail.php
config\queue.php
config\services.php
config\session.php
database\factories
database\migrations
database\seeders
database\.gitignore
database\factories\UserFactory.php
database\migrations\0001_01_01_000000_create_users_table.php
database\migrations\0001_01_01_000001_create_cache_table.php
database\migrations\0001_01_01_000002_create_jobs_table.php
database\migrations\2025_06_17_154418_add_role_to_users_table.php
database\migrations\2025_06_17_154432_create_pengaduan_table.php
database\migrations\2025_06_17_154436_create_stpl_table.php
database\migrations\2025_06_18_144732_add_tujuan_polsek_to_pengaduans_table.php
database\migrations\2025_07_02_173642_add_nik_and_ktp_to_pengaduans_table.php
database\migrations\2025_07_15_123506_add_agama_and_ttl_to_pengaduans_table.php
database\migrations\2025_07_15_125826_add_jenis_kelamin_to_pengaduans_table.php
database\migrations\2025_07_29_010908_add_catatan_pengembalian_to_pengaduans_table.php
database\migrations\2025_07_29_032415_create_surat_pernyataans_table.php
database\migrations\2025_07_29_070340_add_unit_kerja_to_users_table.php
database\migrations\2025_07_30_030945_add_crime_details_to_stpl_table.php
database\migrations\2025_07_30_040157_add_uraian_kejadian_to_stpl_table.php
database\migrations\2025_07_30_041436_add_terlapor_to_stpl_table.php
database\migrations\2025_08_04_103448_add_penerima_details_to_stpl_table.php
database\migrations\2025_08_31_141150_create_bukti_pengaduans_table.php
database\migrations\2025_08_31_145212_add_email_pelapor_to_pengaduans_table.php
database\migrations\2025_08_31_214555_create_riwayat_status_table.php
database\seeders\DatabaseSeeder.php
database\seeders\PengaduanSeeder.php
database\seeders\UnitUserSeeder.php
database\seeders\UserSeeder.php
public\images
public\storage
public\.htaccess
public\favicon.ico
public\hot
public\index.php
public\robots.txt
public\images\polreslogocewe.png
public\images\polreslogocowo.png
public\images\polreslogocowo1.png
resources\css
resources\js
resources\views
resources\css\app.css
resources\js\app.js
resources\js\bootstrap.js
resources\views\admin
resources\views\auth
resources\views\components
resources\views\emails
resources\views\lacak
resources\views\layouts
resources\views\pages
resources\views\partials
resources\views\profile
resources\views\reskrim
resources\views\vendor
resources\views\dashboard.blade.php
resources\views\lacak.blade.php
resources\views\peta-rawan.blade.php
resources\views\welcome.blade.php
resources\views\admin\mentah
resources\views\admin\pengaduan
resources\views\admin\stpl
resources\views\admin\dashboard.blade.php
resources\views\admin\mentah\dashboard
resources\views\admin\mentah\pengaduan
resources\views\admin\mentah\stpl
resources\views\admin\mentah\dashboard.blade.php
resources\views\admin\mentah\show.blade.php
resources\views\admin\mentah\dashboard\show.blade.php
resources\views\admin\mentah\pengaduan\index.blade.php
resources\views\admin\mentah\pengaduan\show.blade.php
resources\views\admin\mentah\stpl\create.blade.php
resources\views\admin\mentah\stpl\index.blade.php
resources\views\admin\mentah\stpl\pdf_template.blade.php
resources\views\admin\pengaduan\index.blade.php
resources\views\admin\pengaduan\show.blade.php
resources\views\admin\stpl\create.blade.php
resources\views\admin\stpl\index.blade.php
resources\views\admin\stpl\pdf_template.blade.php
resources\views\auth\confirm-password.blade.php
resources\views\auth\forgot-password.blade.php
resources\views\auth\login.blade.php
resources\views\auth\register.blade.php
resources\views\auth\reset-password.blade.php
resources\views\auth\verify-email.blade.php
resources\views\components\application-logo.blade.php
resources\views\components\auth-layout.blade.php
resources\views\components\auth-session-status.blade.php
resources\views\components\danger-button.blade.php
resources\views\components\dropdown-link.blade.php
resources\views\components\dropdown.blade.php
resources\views\components\input-error.blade.php
resources\views\components\input-label.blade.php
resources\views\components\modal.blade.php
resources\views\components\nav-link.blade.php
resources\views\components\primary-button.blade.php
resources\views\components\responsive-nav-link.blade.php
resources\views\components\secondary-button.blade.php
resources\views\components\text-input.blade.php
resources\views\emails\pengaduan-diperbaiki.blade.php
resources\views\emails\pengaduan-diterima.blade.php
resources\views\emails\status-diperbarui.blade.php
resources\views\lacak\edit.blade.php
resources\views\lacak\verifikasi.blade.php
resources\views\layouts\app.blade.php
resources\views\layouts\guest.blade.php
resources\views\layouts\navigation.blade.php
resources\views\pages\fitur.blade.php
resources\views\pages\kontak.blade.php
resources\views\pages\profil.blade.php
resources\views\partials\report-form.blade.php
resources\views\profile\partials
resources\views\profile\edit.blade.php
resources\views\profile\partials\delete-user-form.blade.php
resources\views\profile\partials\update-password-form.blade.php
resources\views\profile\partials\update-profile-information-form.blade.php
resources\views\reskrim\tugas
resources\views\reskrim\dashboard.blade.php
resources\views\reskrim\tugas\index.blade.php
resources\views\reskrim\tugas\show.blade.php
routes\auth.php
routes\console.php
routes\web.php
storage\app
storage\debugbar
storage\framework
storage\logs
storage\app\private
storage\app\public
storage\app\.gitignore
storage\app\private\public
storage\app\private\.gitignore
storage\app\private\public\ktp
storage\app\private\public\test-uploads
storage\app\private\public\ktp\9DfCcTcaPeZiU0VZl9UpIE1EMSWMRbtbxaPXwS0e.jpg
storage\app\private\public\ktp\VCaYHazw4mgLtCLvRx9ItkLBlePQOyTMHPLawkxs.jpg
storage\app\private\public\test-uploads\kkuT8abevLsNtSLhrrHoTyaDrpS8aeOtKv9QZKdb.jpg
storage\app\private\public\test-uploads\Y3nBIWGzfC0PotKs7BjWjlR4Hoyn2hgzw3lWnbsS.jpg
storage\app\public\bukti
storage\app\public\ktp
storage\app\public\surat_pernyataan
storage\app\public\.gitignore
storage\app\public\bukti\0Smw0Qjs0fcJmrQ4Vbt6rVA1tvUW21hiCVbXC6A7.jpg
storage\app\public\bukti\3pzuqsT3t9IjifUlv2mZM13RyiYqCgImVjWOvXD5.jpg
storage\app\public\bukti\8PHi4EmH2byjqrbKapT8nfwUt5c0b1ipiYrZqfc4.jpg
storage\app\public\bukti\aimkgpv3j76oDLY09OGhrdIkLdMp4kmsffuua8PD.jpg
storage\app\public\bukti\ctfLLwphZsHXXKiuSgv2tpTe7xPoC2IL9zCpkn8T.jpg
storage\app\public\bukti\DTx8ktqjkuptHk77mWDbt2mBNqwlIBPwu6E4m0B1.jpg
storage\app\public\bukti\EFeff1RImCKS9HaJlK4avjDuq5DsSVQOSMs7Tavd.jpg
storage\app\public\bukti\gfVMiNONZmZyfQS1jX364YPZCPtS8ELoLHG6Pd6X.jpg
storage\app\public\bukti\LGriaCs8GHCcRBWnBgCJhoin86Pxqfwne2HlhjHr.jpg
storage\app\public\bukti\Ljwez96fvc1ZNXqmdiM3Seam5FfUm7UEHSlR8scK.jpg
storage\app\public\bukti\mXiGl5vsT3Qj35lNiyi5hJNkJFXnTi5rRuuB3d8f.jpg
storage\app\public\bukti\MysPbGsn6J5KNOBCxqS44AofKL9qosvwq5LmC4cS.jpg
storage\app\public\bukti\nvgx7ISXBJZ74bnuZNRL6PDcvCJ63NcYbMrC6QNR.jpg
storage\app\public\bukti\qbA8qcnSiGkw6Rx5oqbDmK86dHjRVZCNRHCiM05P.jpg
storage\app\public\bukti\QeCHQnxQBnBPHyl5NC8haAOqNW4mYOnFyezVay59.jpg
storage\app\public\bukti\SyEb6A5wuQteqRGFDc4pTvtqNSdwI1ggSj3wC23A.jpg
storage\app\public\bukti\tNpiHl33OVAL5pjSp0h0dFFGrfX9HC5oyecvoYPL.jpg
storage\app\public\bukti\u7al5yOd2RvZuCppOYIQG789imraDVeeklDHJopF.jpg
storage\app\public\bukti\uALkv0tggZqFjArumD3jifd9I8ZyhZj3sNxmGYBa.jpg
storage\app\public\bukti\uPbab20pVAeRk0WuwIiKb42fJHQA5AE9tHrTSaEg.jpg
storage\app\public\bukti\yu8q3jkiGkGsFt8K1CMgU7zwTxzvYOZjzneakr0u.jpg
storage\app\public\bukti\ziFfoH74xDrqxkDCCjaAOnJsxNUu705P0UBNoLPq.jpg
storage\app\public\ktp\03ou6ORv01yv1twtTVlplzlh8EuD9M7pRRbV3ig8.jpg
storage\app\public\ktp\1GG1kgFdSPzT1YXUtlDUIlxkAo1tVOFIPP77sQH3.jpg
storage\app\public\ktp\2WMeL9lZCliPBs5xBgt0YZuj5De2bEluLMwY4Txn.jpg
storage\app\public\ktp\3IB3m4JsAXdiPq9VqN83aubSWxiD8c0VdRRYpJaO.jpg
storage\app\public\ktp\46LKzuLrsuWXzNB5V9pd27rmAav5zEXud9HwPGLe.jpg
storage\app\public\ktp\644zw5dCU2HawIcILfvfqKAbLC0Fg1RxFSmye0dD.jpg
storage\app\public\ktp\bLyp9u62shw1wczzhOqiwQCQzARDgPKTO9m5zPbc.jpg
storage\app\public\ktp\d5oIS3cjdceJO4RKlhF3ZZQYQNn1TolOnsWbvj37.jpg
storage\app\public\ktp\ePTl0ZRPpxNZTiI4uWsOruuIoTmZsusvrW3uamGu.jpg
storage\app\public\ktp\Hwhv9Erf41VVq8jZfGKtlxjyNCfLFLmXH6Yf6ZJh.jpg
storage\app\public\ktp\ibiZERib1qZlay0puHCpzJJGMnVLrzk0MUNec3Xs.jpg
storage\app\public\ktp\ij5xVlkuHs0mVTB96X1Rfj77poFgnJoQdbPYspCR.jpg
storage\app\public\ktp\Iv51z909C5WncOrtbQ5NBP36MZDOKqFnxDpU25Lf.jpg
storage\app\public\ktp\KzZADQa7sUduQQ07pdU0tnwlOlpYESf0FFuUaLbE.jpg
storage\app\public\ktp\lpzjy2eXSbPPfFfPQbFhBI05umHJsS0ut0Z5V2Wr.jpg
storage\app\public\ktp\mHWkcPdurLoZAl6u3iql06ewgOxlvgqp4PyIDnLE.jpg
storage\app\public\ktp\ngCov1YEK3Euos2CpzBYIbuyjI2iq7EDxV7JTYVB.jpg
storage\app\public\ktp\ObBH5ZJlbZNaZj6ymCZpW8zZb669SlPsQeiZUAAB.jpg
storage\app\public\ktp\pk7D6ctPkR3fFDwPFoZiCy3kvsDAr6lzL8jzcFng.jpg
storage\app\public\ktp\QoHv94N0rmOLXfvQlvJQvT8iNpmxGdIRB9KWDd0O.jpg
storage\app\public\ktp\rEKicvs9v4L3eDe5BINoohihKidtJdXIqFj48C3b.jpg
storage\app\public\ktp\S9596OvQx1SOFG7WPpufY7g4S203SIn2wXMj1a2c.jpg
storage\app\public\ktp\sbCBKgQfTBXtygQWmKvsYyG7ldM7OSypa3bAlnwW.jpg
storage\app\public\ktp\T9nfazrEFUXJV7GWbnldCd2j2XM4WlYJoRGvBJwC.jpg
storage\app\public\ktp\tzRjFgf3t3PderN12HdfFFPQsSJqCAlL0btjgNFo.jpg
storage\app\public\ktp\uACEpEIsdG7QLSLlin6LSdrbm75VczGwLrzZbZxa.jpg
storage\app\public\ktp\UekYuE9JRHpwkluYipj6OC9xJlmWTdmCbGXJntu0.jpg
storage\app\public\ktp\uW5J08LvmgiOr1IL2HqpLufWgWn7EgIAcr24MIdH.jpg
storage\app\public\ktp\VKFVfLpW6RAY3RR1lgYrwGsHl1Rcxl3sEUXj9dvv.jpg
storage\app\public\ktp\vKHblE5WnOH9moWQXZo7t7Ad8G1ENKQdopWGVieh.jpg
storage\app\public\ktp\VZYS1ihlVEjofFr4m2nnQBnRxZJ5o6RxAVHEmdPm.jpg
storage\app\public\ktp\wGS2cEOBEwssmhraYGqVnWz56cmqSEtoW6vrqRYb.jpg
storage\app\public\ktp\WhqShvkdQW4J5glDzXSvLvNxfPNc6KYyF1hsuFV3.jpg
storage\app\public\ktp\xWdOyJBhP1HhI4nYNEVbp4rl0H2cu5nuK3ZZBZIm.jpg
storage\app\public\ktp\Yv1dO9DtK8cPEOs3uqBKGPe7nvVknZBJCK0bAHjk.jpg
storage\app\public\ktp\z331mVOXOfnRsrxfq3QRKKOp8EZyxdgKM46UG0Av.jpg
storage\app\public\ktp\zBe9qQkYDMIdE2I28o0cIbQGvBhqGnt82ZgtWhPG.jpg
storage\app\public\surat_pernyataan\AE6afQirE3CRBsushUwd3LxxctsTSPjlYyzHrKe9.pdf
storage\framework\cache
storage\framework\sessions
storage\framework\testing
storage\framework\views
storage\framework\.gitignore
storage\framework\cache\data
storage\framework\cache\.gitignore
storage\framework\cache\data\.gitignore
storage\framework\sessions\.gitignore
storage\framework\testing\.gitignore
storage\framework\views\.gitignore
storage\framework\views\00b45e5d916604a539e7f0130ddd915d.php
storage\framework\views\02fe4144fc6f1b35fa65474c171bb74e.php
storage\framework\views\0368c8d042725db37103eb7ec94bd69c.php
storage\framework\views\07f23a5c9250599b8309ca9d41ad37fc.php
storage\framework\views\11613c9a6c1f9dfde169f10bfbe5f231.php
storage\framework\views\14ff2534a2c50b646f77ccf2d80e123e.php
storage\framework\views\1dc8c5887b1a72de0f0ca72217ce0bf3.php
storage\framework\views\2128f6320ed4fdb255c62b67d36c23ae.php
storage\framework\views\2276ece9fd269c0dd77a031c164e5504.php
storage\framework\views\3532b615c8fccaf907c311f9e6fee8b1.php
storage\framework\views\3b8213ad9799e3ef7447ba773025db08.php
storage\framework\views\3d1676ac3418168a6044ce4b08bc999a.php
storage\framework\views\482eaa2bc023e21ccb63711152fc0282.php
storage\framework\views\49365ca2a2f3eb455ceb695bd553deab.php
storage\framework\views\49d8847fe2ffc6548ff6b0a5f4b0d93c.php
storage\framework\views\4c0add4731544641e5dc3402f24d9691.php
storage\framework\views\4d47e4e04a46ab2bd2f3979476d1061c.php
storage\framework\views\4db6c39c998281d2b539b96d9fff8d9f.php
storage\framework\views\59c0bd6f0a771b00bae2e5015cf107f5.php
storage\framework\views\5d52b6d8a7fca8b5813f04af6ec39862.php
storage\framework\views\6206d980b30de9cee3a10eb5d2b03c56.php
storage\framework\views\62e1041e73b0dabbe65a2e94af2f2140.php
storage\framework\views\63ab8e8c15780945e87f634198d485b3.php
storage\framework\views\6f4bfc58d072012465cf757b7c20ec4c.php
storage\framework\views\74159b103508b3e0b448dd1c7d0c5701.php
storage\framework\views\7a4790b81062515f87e502aaa6628ac9.php
storage\framework\views\7c4287e72d8f553e44f2ff4612122cab.php
storage\framework\views\7ebfc36c869c20381991ed37d5987b4b.php
storage\framework\views\8160cc3435479a925450cb59c387d465.php
storage\framework\views\8259902a428e800437dbd855559095d9.php
storage\framework\views\82a22e470f8f710df4cf9f1e9e2b4279.php
storage\framework\views\834d6524c3de028bb9d7203c4e214acc.php
storage\framework\views\8511ecfb9f9d278aeca094046ced8681.php
storage\framework\views\8b44ec7f6b4a2bcda5261476b69f57eb.php
storage\framework\views\96bf843db0611296b058a7049d7aeadb.php
storage\framework\views\9707d3720c51aef55ac3e7d54e856d75.php
storage\framework\views\9dadd769c40a92cab53b3ab2ed650ab8.php
storage\framework\views\9f94024b8d530d336f499fb145ede980.php
storage\framework\views\acd9524593636b7c04201c47dc282caf.php
storage\framework\views\b29dd44bb7b9365cdfa0ea176e6a27b8.php
storage\framework\views\b2fa4da7e80592078891f695a65dcd5f.php
storage\framework\views\b9a05bf63488d6dcb9987b4557aa168a.php
storage\framework\views\bc4ff6bc0896c8c8fb525d9cbb99edf2.php
storage\framework\views\bc8cdfb8758a150b72c3d4191b9763fd.php
storage\framework\views\c0a3880e10ebb42215a521ed00737211.php
storage\framework\views\c9e398961c64b78994b9b963945bd84a.php
storage\framework\views\cd129983d49c5d6a22670692f1401919.php
storage\framework\views\d05f86cb3870fb94c31aa95f1e918a81.php
storage\framework\views\d0b036c73f8645eb22db6b70fd6c47c1.php
storage\framework\views\d1ea1eb903e61c6ace915f6d7bdcf069.php
storage\framework\views\d5fe53ecb1645c8eea923abeb3a72787.php
storage\framework\views\db76695d3e03c0c7d9f9b8c7254abe94.php
storage\framework\views\e13a183085e0668ca7d3f6aa4c569c6a.php
storage\framework\views\e272735d7ea1e7cd9b811e7e9c2e522e.php
storage\framework\views\ed6da01d43ad1a6ffa3f4de740e4faa1.php
storage\framework\views\f4efab973b9dc33da9e14437e66a63eb.php
storage\framework\views\f745b509525310638b047a4b8313e445.php
storage\framework\views\f7938ecce2e46cc75c6d6adac7b81993.php
storage\framework\views\f8d798f19458dd4bc3e026c9838f78b0.php
storage\framework\views\f9363ad551baaa2a403eeeb9bee62cc4.php
storage\framework\views\fade43e652a3c73bfdd3d49ae82606b9.php
storage\framework\views\ff81de9a645a169bd5a06b7623a9f536.php
tests\Feature
tests\Unit
tests\TestCase.php
tests\Feature\Auth
tests\Feature\ExampleTest.php
tests\Feature\ProfileTest.php
tests\Feature\Auth\AuthenticationTest.php
tests\Feature\Auth\EmailVerificationTest.php
tests\Feature\Auth\PasswordConfirmationTest.php
tests\Feature\Auth\PasswordResetTest.php
tests\Feature\Auth\PasswordUpdateTest.php
tests\Feature\Auth\RegistrationTest.php
tests\Unit\ExampleTest.php
```


## Info Git
```
Remote:
origin	https://github.com/frhanp/pengaduanpolda.git (fetch)
origin	https://github.com/frhanp/pengaduanpolda.git (push)

Branch:
main

Last 5 commits:
36769c1 add bukti dan email di reskrim
caf1a08 add bukti dan email di view
746904a ubah verifikasi nik jadi tiket
415eb47 modifikasi tampilan lacak
16c63b8 perbaiki copywriting di email
```


## Dependencies (summary)
```
composer.json (require):
  (parse error / none)
composer.json (require-dev):
  (parse error / none)

package.json (dependencies):
  (parse error / none)
package.json (devDependencies):
  (parse error / none)
```


## Routes Files Content
```
===== routes\auth.php =====
<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

===== routes\console.php =====
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

===== routes\web.php =====
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StplController;
use App\Http\Controllers\Reskrim\DashboardController as ReskrimDashboardController;
use App\Http\Controllers\Reskrim\SuratPernyataanController;
use App\Http\Controllers\UploadTestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| File ini berisi semua rute untuk aplikasi web Anda.
|
*/

//======================================================================
// RUTE PUBLIK (Dapat Diakses Semua Pengunjung)
//======================================================================

Route::middleware('web')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('landing');
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::get('/peta-rawan', [PengaduanController::class, 'petaRawan'])->name('peta.rawan');
    Route::get('/lacak-aduan', [PengaduanController::class, 'lacak'])->name('lacak.aduan');
    Route::get('/perbaiki-laporan/verifikasi/{pengaduan}', [PengaduanController::class, 'showVerificationForm'])->name('laporan.verifikasi.form');
    Route::post('/perbaiki-laporan/verifikasi/{pengaduan}', [PengaduanController::class, 'handleVerification'])->name('laporan.verifikasi.handle');

    // [PENAMBAHAN] Rute untuk menampilkan form edit
    Route::get('/perbaiki-laporan/edit/{pengaduan}', [PengaduanController::class, 'showEditForm'])->name('laporan.edit.form');
    // [PENAMBAHAN] Rute untuk memproses update laporan
    Route::post('/perbaiki-laporan/update/{pengaduan}', [PengaduanController::class, 'handleUpdate'])->name('laporan.update.handle');

    Route::get('/profil', [PengaduanController::class, 'showProfil'])->name('page.profil');
    Route::get('/fitur', [PengaduanController::class, 'showFitur'])->name('page.fitur');
    Route::get('/kontak', [PengaduanController::class, 'showKontak'])->name('page.kontak');
});


//======================================================================
// RUTE SETELAH LOGIN
//======================================================================

Route::get('/dashboard', function () {
    $role = Auth::user()->role->value;

    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if ($role === 'reskrim') {
        return redirect()->route('reskrim.dashboard');
    }

    // Fallback jika ada peran lain atau tidak ada peran sama sekali
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup untuk semua rute yang memerlukan pengguna untuk login
Route::middleware('auth')->group(function () {

    // --- Rute Profil Pengguna ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // == RUTE KHUSUS ADMIN ==
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        // Dashboard untuk statistik
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // [BARU] Rute untuk Manajemen Pengaduan
        Route::get('/pengaduan', [AdminDashboardController::class, 'listPengaduan'])->name('pengaduan.list');
        Route::get('/pengaduan/{pengaduan}', [AdminDashboardController::class, 'show'])->name('pengaduan.show');

        // Aksi untuk memproses pengaduan (tidak berubah)
        Route::post('/pengaduan/{pengaduan}/verify', [AdminDashboardController::class, 'verify'])->name('pengaduan.verify');
        Route::post('/pengaduan/{pengaduan}/forward', [AdminDashboardController::class, 'forward'])->name('pengaduan.forward');

        // [PERUBAHAN] Rute untuk Manajemen STPL
        Route::get('/stpl', [StplController::class, 'index'])->name('stpl.index');
        // Mengembalikan rute untuk menampilkan form
        Route::get('/stpl/create/{pengaduan}', [StplController::class, 'create'])->name('stpl.create');
        Route::post('/stpl', [StplController::class, 'store'])->name('stpl.store');
        Route::get('/stpl/{stpl}/download', [StplController::class, 'download'])->name('stpl.download');

        // [PERUBAHAN] Rute untuk Pengembalian Pengaduan
        Route::post('/pengaduan/{pengaduan}/kembalikan', [AdminDashboardController::class, 'kembalikan'])->name('pengaduan.kembalikan');

        Route::get('/stpl/{stpl}/preview', [StplController::class, 'preview'])->name('stpl.preview');
    });

    // == RUTE KHUSUS RESKRIM ==
    Route::middleware('role:reskrim')->prefix('reskrim')->name('reskrim.')->group(function () {
        // Dashboard untuk ringkasan
        Route::get('/dashboard', [ReskrimDashboardController::class, 'index'])->name('dashboard');

        // [BARU] Rute untuk Manajemen Tugas
        Route::get('/tugas', [ReskrimDashboardController::class, 'listTugas'])->name('tugas.list');
        Route::get('/tugas/{pengaduan}', [ReskrimDashboardController::class, 'show'])->name('tugas.show');

        // Aksi untuk update status
        Route::post('/tugas/{pengaduan}/update-status', [ReskrimDashboardController::class, 'updateStatus'])->name('tugas.updateStatus');

        // [PENAMBAHAN] Rute untuk upload dan download surat pernyataan
        Route::post('/tugas/{pengaduan}/upload-surat', [SuratPernyataanController::class, 'store'])->name('tugas.surat.store');
        Route::get('/surat/{suratPernyataan}/download', [SuratPernyataanController::class, 'download'])->name('surat.download');
    });
});


//======================================================================
// RUTE AUTENTIKASI BAWAAN (Login, Register, dll)
//======================================================================
require __DIR__ . '/auth.php';

```


## Routes (from command)
```

  GET|HEAD  / .......................................................................................... landing ΓÇ║ PengaduanController@index
  GET|HEAD  _debugbar/assets/javascript ........................................ debugbar.assets.js ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@js
  GET|HEAD  _debugbar/assets/stylesheets ..................................... debugbar.assets.css ΓÇ║ Barryvdh\Debugbar ΓÇ║ AssetController@css
  DELETE    _debugbar/cache/{key}/{tags?} ............................... debugbar.cache.delete ΓÇ║ Barryvdh\Debugbar ΓÇ║ CacheController@delete
  GET|HEAD  _debugbar/clockwork/{id} .............................. debugbar.clockwork ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@clockwork
  GET|HEAD  _debugbar/open ......................................... debugbar.openhandler ΓÇ║ Barryvdh\Debugbar ΓÇ║ OpenHandlerController@handle
  POST      _debugbar/queries/explain ............................. debugbar.queries.explain ΓÇ║ Barryvdh\Debugbar ΓÇ║ QueriesController@explain
  GET|HEAD  admin/dashboard .............................................................. admin.dashboard ΓÇ║ Admin\DashboardController@index
  GET|HEAD  admin/pengaduan ................................................. admin.pengaduan.list ΓÇ║ Admin\DashboardController@listPengaduan
  GET|HEAD  admin/pengaduan/{pengaduan} .............................................. admin.pengaduan.show ΓÇ║ Admin\DashboardController@show
  POST      admin/pengaduan/{pengaduan}/forward ................................ admin.pengaduan.forward ΓÇ║ Admin\DashboardController@forward
  POST      admin/pengaduan/{pengaduan}/kembalikan ....................... admin.pengaduan.kembalikan ΓÇ║ Admin\DashboardController@kembalikan
  POST      admin/pengaduan/{pengaduan}/verify ................................... admin.pengaduan.verify ΓÇ║ Admin\DashboardController@verify
  GET|HEAD  admin/stpl ....................................................................... admin.stpl.index ΓÇ║ Admin\StplController@index
  POST      admin/stpl ....................................................................... admin.stpl.store ΓÇ║ Admin\StplController@store
  GET|HEAD  admin/stpl/create/{pengaduan} .................................................. admin.stpl.create ΓÇ║ Admin\StplController@create
  GET|HEAD  admin/stpl/{stpl}/download ................................................. admin.stpl.download ΓÇ║ Admin\StplController@download
  GET|HEAD  admin/stpl/{stpl}/preview .................................................... admin.stpl.preview ΓÇ║ Admin\StplController@preview
  GET|HEAD  confirm-password .................................................... password.confirm ΓÇ║ Auth\ConfirmablePasswordController@show
  POST      confirm-password ...................................................................... Auth\ConfirmablePasswordController@store
  GET|HEAD  dashboard ............................................................................................................ dashboard
  POST      email/verification-notification ......................... verification.send ΓÇ║ Auth\EmailVerificationNotificationController@store
  GET|HEAD  fitur ............................................................................... page.fitur ΓÇ║ PengaduanController@showFitur
  GET|HEAD  forgot-password ..................................................... password.request ΓÇ║ Auth\PasswordResetLinkController@create
  POST      forgot-password ........................................................ password.email ΓÇ║ Auth\PasswordResetLinkController@store
  GET|HEAD  kontak ............................................................................ page.kontak ΓÇ║ PengaduanController@showKontak
  GET|HEAD  lacak-aduan ............................................................................ lacak.aduan ΓÇ║ PengaduanController@lacak
  GET|HEAD  login ....................................................................... login ΓÇ║ Auth\AuthenticatedSessionController@create
  POST      login ................................................................................ Auth\AuthenticatedSessionController@store
  POST      logout .................................................................... logout ΓÇ║ Auth\AuthenticatedSessionController@destroy
  PUT       password ...................................................................... password.update ΓÇ║ Auth\PasswordController@update
  POST      pengaduan .......................................................................... pengaduan.store ΓÇ║ PengaduanController@store
  GET|HEAD  perbaiki-laporan/edit/{pengaduan} ......................................... laporan.edit.form ΓÇ║ PengaduanController@showEditForm
  POST      perbaiki-laporan/update/{pengaduan} ................................... laporan.update.handle ΓÇ║ PengaduanController@handleUpdate
  GET|HEAD  perbaiki-laporan/verifikasi/{pengaduan} ..................... laporan.verifikasi.form ΓÇ║ PengaduanController@showVerificationForm
  POST      perbaiki-laporan/verifikasi/{pengaduan} ..................... laporan.verifikasi.handle ΓÇ║ PengaduanController@handleVerification
  GET|HEAD  peta-rawan .......................................................................... peta.rawan ΓÇ║ PengaduanController@petaRawan
  GET|HEAD  profil ............................................................................ page.profil ΓÇ║ PengaduanController@showProfil
  GET|HEAD  profile .................................................................................. profile.edit ΓÇ║ ProfileController@edit
  PATCH     profile .............................................................................. profile.update ΓÇ║ ProfileController@update
  DELETE    profile ............................................................................ profile.destroy ΓÇ║ ProfileController@destroy
  GET|HEAD  register ....................................................................... register ΓÇ║ Auth\RegisteredUserController@create
  POST      register ................................................................................... Auth\RegisteredUserController@store
  POST      reset-password ............................................................... password.store ΓÇ║ Auth\NewPasswordController@store
  GET|HEAD  reset-password/{token} ...................................................... password.reset ΓÇ║ Auth\NewPasswordController@create
  GET|HEAD  reskrim/dashboard ........................................................ reskrim.dashboard ΓÇ║ Reskrim\DashboardController@index
  GET|HEAD  reskrim/surat/{suratPernyataan}/download ................... reskrim.surat.download ΓÇ║ Reskrim\SuratPernyataanController@download
  GET|HEAD  reskrim/tugas ....................................................... reskrim.tugas.list ΓÇ║ Reskrim\DashboardController@listTugas
  GET|HEAD  reskrim/tugas/{pengaduan} ................................................ reskrim.tugas.show ΓÇ║ Reskrim\DashboardController@show
  POST      reskrim/tugas/{pengaduan}/update-status .................. reskrim.tugas.updateStatus ΓÇ║ Reskrim\DashboardController@updateStatus
  POST      reskrim/tugas/{pengaduan}/upload-surat ..................... reskrim.tugas.surat.store ΓÇ║ Reskrim\SuratPernyataanController@store
  GET|HEAD  storage/{path} ................................................................................................... storage.local
  GET|HEAD  up ............................................................................................................................. 
  GET|HEAD  verify-email ...................................................... verification.notice ΓÇ║ Auth\EmailVerificationPromptController
  GET|HEAD  verify-email/{id}/{hash} ...................................................... verification.verify ΓÇ║ Auth\VerifyEmailController

                                                                                                                         Showing [55] routes

```


## Controllers Content
```
===== app\Http\Controllers\Admin\DashboardController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Events\StatusDiubah;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard statistik untuk Admin.
     */
    public function index(Request $request)
    {
        $unitKerja = Auth::user()->unit_kerja;

        // --- Data untuk Kartu Statistik (tidak berubah) ---
        $totalLaporan = Pengaduan::where('tujuan_polsek', $unitKerja)->count();
        $laporanBaru = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Baru')->count();
        $laporanDiverifikasi = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Diverifikasi')->count();
        $laporanSelesai = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Selesai')->count();

        // --- Data untuk Analitik ---

        // 1. Grafik Garis: Tren Laporan Masuk (tidak berubah)
        $periode = $request->input('periode', '7hari');
        $days = match ($periode) {
            '30hari' => 30,
            '90hari' => 90,
            default => 7,
        };
        $laporanMasukHarian = Pengaduan::select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('tujuan_polsek', $unitKerja)
            ->whereBetween('created_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');
        $lineChartData = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i)->format('Y-m-d');
            $lineChartData[] = ['x' => $tanggal, 'y' => $laporanMasukHarian[$tanggal] ?? 0];
        }

        // [PERUBAHAN] 2. Grafik Batang: Beban Kerja Tim Reskrim
        $bebanKerjaReskrim = User::where('role', 'reskrim')
            ->where('unit_kerja', $unitKerja)
            ->withCount(['pengaduans as tugas_aktif_count' => function ($query) {
                $query->whereIn('status', ['Diteruskan ke Reskrim', 'Diproses']);
            }])
            ->get();

        $barChartData = [
            'labels' => $bebanKerjaReskrim->pluck('name')->all(),
            'data' => $bebanKerjaReskrim->pluck('tugas_aktif_count')->all(),
        ];

        // 3. Daftar Laporan Mendesak (tidak berubah)
        $laporanMendesak = Pengaduan::where('tujuan_polsek', $unitKerja)
            ->where('status', 'Baru')->orderBy('created_at', 'asc')->limit(5)->get();

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalLaporan',
            'laporanBaru',
            'laporanDiverifikasi',
            'laporanSelesai',
            'lineChartData',
            'barChartData',
            'laporanMendesak',
            'periode'
        ));
    }


    /**
     * [FUNGSI BARU] Menampilkan daftar semua pengaduan dalam bentuk tabel.
     */
    public function listPengaduan(Request $request)
    {
        // [PERUBAHAN] Ambil unit kerja admin yang sedang login
        $unitKerja = Auth::user()->unit_kerja;

        // [PERUBAHAN] Mulai query dengan filter unit kerja, bukan Pengaduan::query()
        $query = Pengaduan::where('tujuan_polsek', $unitKerja);

        // Terapkan filter tambahan jika ada input 'status' (logika ini tidak berubah)
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Terapkan filter jika ada input 'search' (logika ini tidak berubah)
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama_pelapor', 'like', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            });
        }

        // Terapkan filter jika ada rentang tanggal (logika ini tidak berubah)
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date . ' 23:59:59']);
        }

        // Setelah semua filter diterapkan, ambil data dengan paginasi
        $pengaduans = $query->latest()->paginate(10);

        // Kirim data ke view
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail satu pengaduan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // [PERUBAHAN] Keamanan: Pastikan admin hanya bisa melihat laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'AKSES DITOLAK');
        }

        // [PERUBAHAN] Ambil daftar user reskrim DARI UNIT KERJA YANG SAMA
        $reskrimUsers = User::where('role', 'reskrim')
            ->where('unit_kerja', Auth::user()->unit_kerja)
            ->get();

        return view('admin.pengaduan.show', compact('pengaduan', 'reskrimUsers'));
    }

    /**
     * Mengembalikan laporan ke pelapor dengan catatan.
     */
    public function kembalikan(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        if ($pengaduan->status !== 'Baru') { /* ... (logika tidak berubah) ... */
        }
        $request->validate(['catatan' => 'required|string|min:10']);
        $pengaduan->update(['status' => 'Dikembalikan', 'catatan_pengembalian' => $request->catatan]);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Dikembalikan',
            'catatan'    => $request->catatan,
            'updated_by' => Auth:: id(),
        ]);
        event(new StatusDiubah($pengaduan, $riwayat));
        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan telah dikembalikan.');
    }

    /**
     * Memverifikasi sebuah pengaduan.
     */
    public function verify(Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        if ($pengaduan->status !== 'Baru') { /* ... (logika tidak berubah) ... */
        }
        $pengaduan->update(['status' => 'Diverifikasi', 'verified_by_admin_id' => Auth::id()]);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Diverifikasi',
            'catatan'    => 'Laporan telah diverifikasi oleh admin.',
            'updated_by' => Auth::id(),
        ]);

        event(new StatusDiubah($pengaduan, $riwayat));
        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diverifikasi.');
    }

    /**
     * Meneruskan pengaduan ke anggota Reskrim.
     */
    public function forward(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        // Validasi bahwa user reskrim yang dipilih memang ada dan berasal dari unit yang sama
        $request->validate([
            'assigned_to_reskrim_id' => [
                'required',
                'exists:users,id',
                function ($attribute, $value, $fail) {
                    $user = User::find($value);
                    if (!$user || $user->unit_kerja !== Auth::user()->unit_kerja) {
                        $fail('Anggota Reskrim yang dipilih tidak valid.');
                    }
                },
            ],
        ]);

        $pengaduan->update([
            'status' => 'Diteruskan ke Reskrim',
            'assigned_to_reskrim_id' => $request->assigned_to_reskrim_id,
        ]);

        $userReskrim = User::find($request->assigned_to_reskrim_id);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Diteruskan ke Reskrim',
            'catatan'    => 'Laporan diteruskan ke tim Reskrim: ' . $userReskrim->name,
            'updated_by' => Auth::id(),
        ]);
        event(new StatusDiubah($pengaduan, $riwayat));

        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diteruskan.');
    }
}

===== app\Http\Controllers\Admin\StplController.php =====
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Stpl;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class StplController extends Controller
{
    public function index(Request $request)
    {
        // Mulai dengan query dasar, termasuk relasi ke pengaduan
        $query = Stpl::with('pengaduan');

        // Terapkan filter jika ada input 'search'
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                // Cari di kolom nomor_stpl
                $q->where('nomor_stpl', 'like', '%' . $searchTerm . '%')
                    // Atau cari di nama pelapor melalui relasi
                    ->orWhereHas('pengaduan', function ($subQ) use ($searchTerm) {
                        $subQ->where('nama_pelapor', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        // Terapkan filter jika ada rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tanggal_dibuat', [$request->start_date, $request->end_date]);
        }

        // Setelah semua filter diterapkan, ambil data dengan paginasi
        $stpls = $query->latest()->paginate(10);

        // Kirim data ke view
        return view('admin.stpl.index', compact('stpls'));
    }

    /**
     * Menampilkan form untuk membuat STPL baru.
     * (Fungsi ini mungkin belum ada, kita tambahkan sekarang)
     */
    public function create(Pengaduan $pengaduan)
    {
        // [PERBAIKAN] Ubah logika untuk mengizinkan pembuatan STPL
        // selama laporan sudah diproses (bukan 'Baru') dan belum punya STPL.
        if ($pengaduan->status === 'Baru' || $pengaduan->stpl) {
            return redirect()->route('admin.pengaduan.show', $pengaduan)
                ->with('error', 'STPL tidak dapat dibuat untuk laporan ini. Pastikan laporan sudah diverifikasi dan belum ada STPL sebelumnya.');
        }

        return view('admin.stpl.create', compact('pengaduan'));
    }
    public function preview(Stpl $stpl)
    {
        $dataUntukPdf = [
            'stpl' => $stpl->load(['creator', 'pengaduan']),
            'pengaduan' => $stpl->pengaduan,
        ];

        $pdf = Pdf::loadView('admin.stpl.pdf_template', $dataUntukPdf);

        // stream() akan menampilkan PDF di browser, bukan men-download.
        return $pdf->stream('preview-stpl.pdf');
    }

    /**
     * Menyimpan data STPL yang baru dibuat dan men-generate PDF.
     * (Ini adalah method store Anda yang sudah disempurnakan)
     */
    /**
     * [PERUBAHAN UTAMA]
     * Menyimpan STPL dengan opsi nomor manual atau otomatis.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form, termasuk detail kejadian yang baru
        $validated = $request->validate([
            'pengaduan_id' => 'required|exists:pengaduans,id',
            'tanggal_dibuat' => 'required|date',
            'nomor_stpl_option' => 'required|in:otomatis,manual',
            'nomor_stpl' => 'required_if:nomor_stpl_option,manual|nullable|string|max:255|unique:stpl,nomor_stpl',

            // [PENAMBAHAN] Validasi untuk detail kejadian
            'tindak_pidana' => 'required|string|max:255',
            'pasal_dilanggar' => 'required|string|max:255',
            'hari_kejadian' => 'required|string|max:50',
            'tanggal_kejadian' => 'required|date',
            'tempat_kejadian' => 'required|string',
            'uraian_kejadian' => 'required|string',
            'terlapor' => 'required|string',
            'nama_penerima' => 'required|string|max:255',
            'nrp_penerima' => 'required|string|max:20',
        ]);

        $pengaduan = Pengaduan::findOrFail($validated['pengaduan_id']);
        if ($pengaduan->stpl) {
            return back()->with('error', 'Laporan ini sudah memiliki STPL.');
        }

        // 2. Tentukan nomor STPL berdasarkan pilihan (tidak berubah)
        $nomorStplFinal = '';
        if ($validated['nomor_stpl_option'] === 'otomatis') {
            $nomorStplFinal = Stpl::generateStplNumber();
        } else {
            $nomorStplFinal = $validated['nomor_stpl'];
        }

        // 3. Simpan data STPL ke database, termasuk detail kejadian yang baru
        $stpl = Stpl::create([
            'pengaduan_id' => $pengaduan->id,
            'nomor_stpl' => $nomorStplFinal,
            'tanggal_dibuat' => $validated['tanggal_dibuat'],
            'dibuat_oleh_admin_id' => Auth::id(),

            // [PENAMBAHAN] Menyimpan data detail kejadian
            'tindak_pidana' => $validated['tindak_pidana'],
            'pasal_dilanggar' => $validated['pasal_dilanggar'],
            'hari_kejadian' => $validated['hari_kejadian'],
            'tanggal_kejadian' => $validated['tanggal_kejadian'],
            'tempat_kejadian' => $validated['tempat_kejadian'],
            'uraian_kejadian' => $validated['uraian_kejadian'],
            'terlapor' => $validated['terlapor'],
            'nama_penerima' => $validated['nama_penerima'],
            'nrp_penerima' => $validated['nrp_penerima'],
        ]);

        // 4. Redirect kembali ke halaman show dengan pesan sukses
        // (Ini adalah logika redirect Anda yang sebelumnya, tanpa download otomatis)
        return redirect()->route('admin.pengaduan.show', $pengaduan->id)
            ->with('success', 'STPL berhasil dibuat.');
    }


    public function download(Stpl $stpl)
    {
        $dataUntukPdf = [
            'stpl' => $stpl->load(['creator', 'pengaduan']),
            'pengaduan' => $stpl->pengaduan,
        ];

        $pdf = Pdf::loadView('admin.stpl.pdf_template', $dataUntukPdf);
        return $pdf->download('STPL-' . $stpl->nomor_stpl . '.pdf');
    }
}

===== app\Http\Controllers\Auth\AuthenticatedSessionController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

===== app\Http\Controllers\Auth\ConfirmablePasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\EmailVerificationNotificationController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}

===== app\Http\Controllers\Auth\EmailVerificationPromptController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}

===== app\Http\Controllers\Auth\NewPasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\PasswordController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}

===== app\Http\Controllers\Auth\PasswordResetLinkController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}

===== app\Http\Controllers\Auth\RegisteredUserController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Enums\UserRole;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:' . implode(',', array_column(UserRole::cases(), 'value'))],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

===== app\Http\Controllers\Auth\VerifyEmailController.php =====
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}

===== app\Http\Controllers\Reskrim\DashboardController.php =====
<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Events\StatusDiubah;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard ringkasan untuk Reskrim.
     */
    public function index(Request $request)
    {
        // --- Statistik untuk Kartu (tidak berubah) ---
        $totalTugas = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->count();
        $tugasDiproses = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Diproses')->count();
        $tugasSelesai = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Selesai')->count();

        // --- [PERUBAHAN] Logika untuk menyiapkan data chart ---

        // 1. Tentukan periode waktu, defaultnya 7 hari.
        $periode = $request->input('periode', '7hari');
        $days = match ($periode) {
            '30hari' => 30,
            '90hari' => 90,
            default => 7,
        };

        // 2. Ambil data TUGAS DITERIMA per hari
        $laporanDiterima = Pengaduan::select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('assigned_to_reskrim_id', Auth::id())
            ->whereBetween('created_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');

        // 3. Ambil data TUGAS DISELESAIKAN per hari
        $laporanSelesai = Pengaduan::select(DB::raw('DATE(updated_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('assigned_to_reskrim_id', Auth::id())
            ->where('status', 'Selesai')
            ->whereBetween('updated_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');

        // 4. Siapkan array data untuk grafik garis (line chart)
        $lineChartData = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i)->format('Y-m-d');
            $lineChartData['labels'][] = Carbon::parse($tanggal)->translatedFormat('d M');
            $lineChartData['diterima'][] = $laporanDiterima[$tanggal] ?? 0;
            $lineChartData['selesai'][] = $laporanSelesai[$tanggal] ?? 0;
        }

        // 5. Siapkan data untuk grafik lingkaran (donut chart)
        $donutChartData = [
            'labels' => ['Diproses', 'Selesai'],
            'data' => [$tugasDiproses, $tugasSelesai],
        ];

        // 6. Kirim semua data ke view
        return view('reskrim.dashboard', compact(
            'totalTugas',
            'tugasDiproses',
            'tugasSelesai',
            'lineChartData', // Data baru untuk line chart
            'donutChartData', // Data baru untuk donut chart
            'periode'
        ));
    }

    /**
     * Menampilkan daftar tugas laporan dalam tabel.
     */
    public function listTugas(Request $request)
    {
        // Mulai dengan query dasar, hanya untuk tugas milik reskrim yang login
        $query = Pengaduan::where('assigned_to_reskrim_id', Auth::id());

        // Terapkan filter jika ada input 'status'
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Terapkan filter jika ada input 'search' (untuk nama atau NIK)
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama_pelapor', 'like', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            });
        }

        // Terapkan filter jika ada rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date . ' 23:59:59']);
        }

        // Setelah semua filter diterapkan, ambil data dengan paginasi
        $pengaduans = $query->latest()->paginate(10);

        // Kirim data ke view
        return view('reskrim.tugas.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail satu tugas laporan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan reskrim hanya bisa melihat tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403, 'AKSES DITOLAK');
        }

        return view('reskrim.tugas.show', compact('pengaduan'));
    }

    /**
     * Update status laporan oleh Reskrim.
     */
    public function updateStatus(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan reskrim hanya bisa update tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            // [PERUBAHAN] Kembalikan 'Selesai' sebagai opsi valid
            'status' => 'required|string|in:Diproses,Selesai',
        ]);

        $pengaduan->update([
            'status' => $request->status,
        ]);

        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => $request->status,
            'catatan'    => 'Status laporan diperbarui oleh tim Reskrim.',
            'updated_by' => Auth::id(),
        ]);

        event(new StatusDiubah($pengaduan, $riwayat));

        // [PERBAIKAN] Arahkan kembali ke rute yang benar
        return redirect()->route('reskrim.tugas.show', $pengaduan)->with('success', 'Status laporan berhasil diperbarui.');
    }
}

===== app\Http\Controllers\Reskrim\SuratPernyataanController.php =====
<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\SuratPernyataan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratPernyataanController extends Controller
{
    public function store(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan hanya reskrim yang ditugaskan yang bisa upload
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'file_pernyataan' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120', // Maks 5MB
        ]);

        $path = $request->file('file_pernyataan')->store('surat_pernyataan', 'public');

        SuratPernyataan::create([
            'pengaduan_id' => $pengaduan->id,
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'path_file' => $path,
        ]);

        return redirect()->back()->with('success', 'Dokumen berhasil diunggah.');
    }

    public function download(SuratPernyataan $suratPernyataan)
    {
        // Keamanan: Pastikan hanya reskrim yang ditugaskan yang bisa download
        if ($suratPernyataan->pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        return Storage::disk('public')->download($suratPernyataan->path_file);
    }
}

===== app\Http\Controllers\Controller.php =====
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

===== app\Http\Controllers\PengaduanController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Http\Requests\StorePengaduanRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\PengaduanReceived;
use App\Mail\PengaduanDiperbaiki;

class PengaduanController extends Controller
{
    public function index()
    {
        // [BAGIAN KRUSIAL] - Ambil data dari database
        // Hanya ambil data yang punya koordinat untuk ditampilkan di peta
        $laporanDiPeta = Pengaduan::select('latitude', 'longitude', 'isi_laporan', 'status')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->latest() // Ambil yang terbaru
            ->get();

        // [BAGIAN KRUSIAL] - Kirim data ke view dengan nama variabel 'laporan'
        return view('welcome', ['laporan' => $laporanDiPeta]);
    }

    public function showVerificationForm(Pengaduan $pengaduan)
    {
        // Pastikan hanya laporan yang 'Dikembalikan' yang bisa diakses
        if ($pengaduan->status !== 'Dikembalikan') {
            abort(404); // Tampilkan halaman tidak ditemukan jika statusnya tidak sesuai
        }

        return view('lacak.verifikasi', compact('pengaduan'));
    }

    /**
     * [FUNGSI BARU]
     * Memproses NIK yang diinput dan mengarahkan ke form edit jika cocok.
     */
    public function handleVerification(Request $request, Pengaduan $pengaduan)
    {
        // Validasi input nomor tiket
        $request->validate(['nomor_tiket' => 'required|string']);

        // Bandingkan nomor tiket yang diinput dengan nomor tiket virtual dari pengaduan
        if ($request->nomor_tiket === $pengaduan->nomor_tiket) {
            // Jika cocok, beri "izin" di session
            $request->session()->put('can_edit_pengaduan_' . $pengaduan->id, true);

            // Arahkan ke halaman form perbaikan
            return redirect()->route('laporan.edit.form', $pengaduan->id);
        }

        // Jika tidak cocok, kembalikan dengan pesan error
        return back()->with('error', 'Nomor tiket yang Anda masukkan tidak sesuai.');
    }

    public function petaRawan()
    {
        // [PERUBAHAN] Menambahkan 'tujuan_polsek' ke dalam select query
        // agar data ini tersedia di view untuk ditampilkan saat hover.
        $laporanDiPeta = Pengaduan::select('latitude', 'longitude', 'isi_laporan', 'status', 'tujuan_polsek')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->latest()
            ->get();

        // Kirim data ke view 'peta-rawan' dengan nama variabel 'laporan'.
        return view('peta-rawan', ['laporan' => $laporanDiPeta]);
    }

    /**
     * [FUNGSI BARU]
     * Menampilkan form perbaikan yang sudah terisi data lama.
     */
    public function showEditForm(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Cek "izin" yang kita berikan di session setelah NIK cocok
        if (!$request->session()->get('can_edit_pengaduan_' . $pengaduan->id)) {
            // Jika tidak ada izin, akses ditolak
            abort(403, 'Akses tidak diizinkan. Silakan verifikasi NIK Anda terlebih dahulu.');
        }

        // Tampilkan view form edit dan kirim data pengaduan yang ada
        return view('lacak.edit', compact('pengaduan'));
    }

    /**
     * [FUNGSI BARU]
     * Memproses data laporan yang sudah diperbaiki.
     */
    public function handleUpdate(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Cek "izin" sekali lagi
        if (!$request->session()->get('can_edit_pengaduan_' . $pengaduan->id)) {
            abort(403, 'Akses tidak diizinkan.');
        }

        // Validasi data yang masuk. Perhatikan 'foto_ktp' sekarang 'nullable'.
        $validatedData = $request->validate([
            'nama_pelapor'      => 'required|string|max:255',
            'no_hp_pelapor'     => 'required|string|max:20',
            'nik'               => 'required|numeric|digits:16',
            'foto_ktp'          => 'nullable|image|mimes:jpeg,png,jpg|max:10000', // Foto KTP sekarang opsional
            'tempat_lahir'      => 'required|string|max:100',
            'tanggal_lahir'     => 'required|date',
            'jenis_kelamin'     => 'required|string|in:Laki-laki,Perempuan',
            'agama'             => 'required|string|max:50',
            'pekerjaan_pelapor' => 'nullable|string|max:100',
            'alamat_pelapor'    => 'nullable|string',
            'tujuan_polsek'     => 'required|string|max:255',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
        ]);

        // Cek jika ada file KTP baru yang di-upload
        if ($request->hasFile('foto_ktp')) {
            // Hapus file KTP lama jika ada
            if ($pengaduan->foto_ktp) {
                Storage::delete('public/' . $pengaduan->foto_ktp);
            }
            // Simpan file KTP yang baru
            $path = $request->file('foto_ktp')->store('ktp', 'public');
            $validatedData['foto_ktp'] = $path;
        }
        // ---- PERUBAIKAN LOGIKA ----
        // 1. Tambahkan status baru dan hapus catatan ke data yang akan diupdate
        $validatedData['status'] = 'Baru';
        $validatedData['catatan_pengembalian'] = null;

        // 2. Lakukan update HANYA SEKALI untuk semua perubahan
        $pengaduan->update($validatedData);

        // 3. Catat ke riwayat
        $pengaduan->riwayatStatus()->create([
            'status'  => 'Baru',
            'catatan' => 'Laporan diperbaiki dan dikirim ulang oleh pelapor.',
        ]);

        // 4. Kirim email notifikasi ke pelapor
        Mail::to($pengaduan->email_pelapor)->send(new PengaduanDiperbaiki($pengaduan));
        // ---- BATAS PERUBAIKAN ----

        // // Update data pengaduan di database
        // $pengaduan->update($validatedData);

        // // Kembalikan status menjadi 'Baru' dan hapus catatan
        // $pengaduan->update([
        //     'status' => 'Baru',
        //     'catatan_pengembalian' => null,
        // ]);

        // Hapus "izin" dari session setelah selesai
        $request->session()->forget('can_edit_pengaduan_' . $pengaduan->id);

        // Arahkan kembali ke halaman lacak dengan pesan sukses
        return redirect()->route('lacak.aduan', ['nama_pelapor' => $pengaduan->nama_pelapor])
            ->with('success', 'Laporan berhasil diperbaiki dan telah dikirim ulang untuk ditinjau.');
    }

    public function store(Request $request)
    {
        // 1. Validasi semua input langsung di sini
        $validatedData = $request->validate([
            'nama_pelapor'      => 'required|string|max:255',
            'email_pelapor'     => 'required|email|max:255',
            'bukti.*'           => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
            'no_hp_pelapor'     => 'required|string|max:20',
            'umur_pelapor'      => 'required|integer|min:1',
            'pekerjaan_pelapor' => 'required|string|max:100',
            'alamat_pelapor'    => 'required|string',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
            'tujuan_polsek'     => 'required|string|max:255',
            'nik'               => 'required|numeric',
            'foto_ktp'          => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'agama'             => 'required|string|max:50',
            'tempat_lahir'      => 'required|string|max:255',
            'tanggal_lahir'     => 'required|date',
            'jenis_kelamin'     => 'required|string|max:20',
        ]);


        // 2. Proses upload file foto KTP
        if ($request->hasFile('foto_ktp')) {


            $path = $request->file('foto_ktp')->store('ktp', 'public');

            // [PERBAIKAN] Cek apakah file berhasil disimpan
            if (!$path) {
                // Jika gagal, kembalikan dengan pesan error
                return redirect()->back()->with('error', 'Gagal mengupload file KTP. Pastikan folder storage dapat ditulis.');
            }

            // $path sekarang akan berisi 'ktp/namafileacak.jpg'
            // Ini adalah path yang benar untuk disimpan ke database.
            $validatedData['foto_ktp'] = $path;
        }

        // 3. Simpan semua data ke database
        $pengaduan = Pengaduan::create($validatedData);

        // 4. Proses upload file bukti (jika ada)
        if ($request->hasFile('bukti')) {
            foreach ($request->file('bukti') as $file) {
                $path = $file->store('bukti', 'public');
                // Gunakan relasi untuk menyimpan bukti
                $pengaduan->bukti()->create([
                    'file_path' => $path
                ]);
            }
        }
        Mail::to($pengaduan->email_pelapor)->send(new PengaduanReceived($pengaduan));
        return redirect('/')->with('success', 'Laporan Anda telah berhasil dikirim. Terima kasih!');
    }

    public function lacak(Request $request)
    {
        $pengaduans = collect();
        $keyword = $request->input('keyword');

        if ($request->filled('keyword')) {
            if (preg_match('/^([A-Z]+)-(\d+)$/i', $keyword, $matches)) {
                $id = (int)$matches[2];

                $pengaduans = Pengaduan::with('riwayatStatus')
                    ->where('id', $id)
                    ->get();
            }
        }

        return view('lacak', compact('pengaduans'));
    }


    public function showProfil()
    {
        return view('pages.profil');
    }



    /**
     * [FUNGSI BARU] Menampilkan halaman Fitur.
     */
    public function showFitur()
    {
        return view('pages.fitur');
    }

    /**
     * [FUNGSI BARU] Menampilkan halaman Kontak.
     */
    public function showKontak()
    {
        return view('pages.kontak');
    }
}

===== app\Http\Controllers\ProfileController.php =====
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

===== app\Http\Controllers\UserController.php =====
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        User::create($request->all()); 
        return redirect()->route('users.index')->with('success', 'User successfully created');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all()); 
        return redirect()->route('users.index')->with('success', 'User successfully updated');
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'User successfully removed');
    }
}

```


## Models Content
```
===== app\Models\BuktiPengaduan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuktiPengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengaduan_id',
        'file_path',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}

===== app\Models\Pengaduan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RiwayatStatus;

class Pengaduan extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pelapor',
        'umur_pelapor',
        'pekerjaan_pelapor',
        'alamat_pelapor',
        'no_hp_pelapor',
        'nik',
        'foto_ktp',
        'isi_laporan',
        'tujuan_polsek',
        'latitude',
        'longitude',
        'tanggal_laporan',
        'status',
        'verified_by_admin_id',
        'assigned_to_reskrim_id',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'catatan_pengembalian',
        'email_pelapor',
    ];

    /**
     * Tipe data asli dari atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_laporan' => 'datetime',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'tanggal_lahir' => 'date',
    ];

    protected function nomorTiket(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn() => 'PGK-' . str_pad($this->id, 6, '0', STR_PAD_LEFT),
        );
    }


    // RELASI: Mendefinisikan hubungan Pengaduan dengan tabel lain

    /**
     * Relasi ke STPL yang dimiliki oleh pengaduan ini.
     */
    public function stpl(): HasOne
    {
        return $this->hasOne(Stpl::class);
    }

    /**
     * Relasi ke User (Admin) yang memverifikasi pengaduan ini.
     */
    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by_admin_id');
    }

    /**
     * Relasi ke User (Reskrim) yang ditugaskan untuk pengaduan ini.
     */
    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to_reskrim_id');
    }

    public function suratPernyataans(): HasMany
    {
        return $this->hasMany(SuratPernyataan::class);
    }

    public function bukti()
    {
        return $this->hasMany(BuktiPengaduan::class);
    }

    public function riwayatStatus()
    {
        return $this->hasMany(RiwayatStatus::class)->orderBy('created_at', 'desc');
    }
}

===== app\Models\RiwayatStatus.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatStatus extends Model
{
    use HasFactory;
    protected $table = 'riwayat_status';
    protected $fillable = ['pengaduan_id', 'status', 'catatan', 'updated_by'];

    public function pengaduan() {
        return $this->belongsTo(Pengaduan::class);
    }
    public function user() {
        return $this->belongsTo(User::class, 'updated_by');
    }
}

===== app\Models\Stpl.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stpl extends Model
{
    use HasFactory;

    /**
     * Nama tabel kustom jika tidak mengikuti konvensi plural.
     * Kita definisikan untuk kejelasan, meskipun 'stpls' sudah benar.
     * @var string
     */
    protected $table = 'stpl';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pengaduan_id',
        'nomor_stpl',
        'tanggal_dibuat',
        'dibuat_oleh_admin_id',
        'tindak_pidana',
        'pasal_dilanggar',
        'hari_kejadian',
        'tanggal_kejadian',
        'tempat_kejadian',
        'uraian_kejadian',
        'terlapor',
        'nama_penerima',
        'nrp_penerima',
    ];

    /**
     * Tipe data asli dari atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_dibuat' => 'date',
        'tanggal_kejadian' => 'date',
    ];

    // RELASI: Mendefinisikan hubungan STPL dengan tabel lain

    /**
     * Relasi ke Pengaduan yang memiliki STPL ini.
     */
    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    /**
     * Relasi ke User (Admin) yang membuat STPL ini.
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh_admin_id');
    }

    /**
     * [FUNGSI BARU]
     * Membuat nomor STPL unik secara otomatis.
     * Format: STPL/TAHUN/BULAN/NOMOR_URUT
     */
    public static function generateStplNumber(): string
    {
        $year = date('Y');
        $month = date('m');

        // Hitung berapa banyak STPL yang sudah ada di bulan dan tahun ini
        $count = self::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();

        // Nomor urut berikutnya (ditambah 1)
        $nextNumber = $count + 1;

        // Format nomor urut menjadi 4 digit dengan angka 0 di depan (e.g., 0001, 0012)
        $formattedNumber = str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        return "STPL-{$year}-{$month}-{$formattedNumber}";
    }
}

===== app\Models\SuratPernyataan.php =====
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratPernyataan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengaduan_id',
        'user_id',
        'judul',
        'path_file',
    ];

    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

```


## Views & UI Files Content
```
===== resources\views\admin\mentah\dashboard\show.blade.php =====
{{-- Menambahkan Aset Leaflet di Halaman Ini Saja --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style> #map { height: 300px; z-index: 10;} </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Notifikasi Sukses/Error --}}
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan --}}
                <div class="md:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                            <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                <dt class="font-medium text-gray-500">Nama</dt><dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">No. HP</dt><dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">Umur</dt><dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500">Pekerjaan</dt><dd class="text-gray-900">{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500 col-span-2">Alamat</dt><dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                            </dl>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                            <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                            <div id="map" class="mt-2 rounded-lg"></div>
                        </div>

                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi --}}
                <div class="space-y-6">
                    {{-- Box Status --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                         <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Baru') $statusClass = 'bg-blue-100 text-blue-800';
                            elseif ($pengaduan->status == 'Diverifikasi') $statusClass = 'bg-yellow-100 text-yellow-800';
                            elseif ($pengaduan->status == 'Diteruskan ke Reskrim') $statusClass = 'bg-indigo-100 text-indigo-800';
                            elseif ($pengaduan->status == 'Diproses') $statusClass = 'bg-purple-100 text-purple-800';
                            elseif ($pengaduan->status == 'Selesai') $statusClass = 'bg-green-100 text-green-800';
                        @endphp
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                        <p class="text-xs text-gray-500 mt-4">Diverifikasi oleh: {{ $pengaduan->verifier->name ?? 'Belum ada' }}</p>
                        <p class="text-xs text-gray-500">Diteruskan ke: {{ $pengaduan->assignee->name ?? 'Belum ada' }}</p>
                    </div>

                    {{-- Form Aksi Verifikasi --}}
                    @if ($pengaduan->status === 'Baru')
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <form action="{{ route('admin.dashboard.verify', $pengaduan) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">Verifikasi Laporan Ini</button>
                        </form>
                    </div>
                    @endif

                    {{-- Form Aksi STPL --}}
                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('admin.stpl.create', $pengaduan->id) }}" 
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition ease-in-out duration-150">
                            Buat STPL
                        </a>
                    </div>
                    
                    {{-- Form Aksi Teruskan ke Reskrim --}}
                    @if ($pengaduan->status === 'Diverifikasi' && !$pengaduan->assigned_to_reskrim_id)
                     <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Teruskan Laporan</h3>
                        <form action="{{ route('admin.dashboard.forward', $pengaduan) }}" method="POST">
                            @csrf
                            <label for="assigned_to_reskrim_id" class="text-sm font-medium text-gray-700">Pilih Anggota Reskrim</label>
                            <select name="assigned_to_reskrim_id" id="assigned_to_reskrim_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">-- Pilih Anggota --</option>
                                @foreach ($reskrimUsers as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="mt-4 w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition">Teruskan ke Reskrim</button>
                        </form>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Cek jika ada data latitude dan longitude
            const lat = {{ $pengaduan->latitude ?? 'null' }};
            const lng = {{ $pengaduan->longitude ?? 'null' }};

            if (lat && lng) {
                const map = L.map('map').setView([lat, lng], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'Â© OpenStreetMap contributors'
                }).addTo(map);

                L.marker([lat, lng]).addTo(map)
                    .bindPopup('Lokasi kejadian yang dilaporkan.');
            } else {
                // Jika tidak ada koordinat, tampilkan pesan
                document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
            }
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\mentah\pengaduan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->created_at->format('d M Y, H:i') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">{{ $pengaduan->status }}</span></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}" class="text-indigo-600 hover:text-indigo-900">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data pengaduan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $pengaduans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\mentah\pengaduan\show.blade.php =====
{{-- Menambahkan Aset Leaflet di Halaman Ini Saja --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style> #map { height: 300px; z-index: 10;} </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Notifikasi Sukses/Error --}}
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan --}}
                <div class="md:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                            <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                <dt class="font-medium text-gray-500">Nama</dt><dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">No. HP</dt><dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">NIK</dt><dd class="text-gray-900">{{ $pengaduan->nik ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500">Umur</dt><dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500 col-span-2">Alamat</dt><dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                            </dl>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                            <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                            <div id="map" class="mt-2 rounded-lg"></div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi --}}
                <div class="space-y-6">
                    {{-- Box Status --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                        <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Baru') $statusClass = 'bg-blue-100 text-blue-800';
                            elseif ($pengaduan->status == 'Diverifikasi') $statusClass = 'bg-yellow-100 text-yellow-800';
                            elseif ($pengaduan->status == 'Diteruskan ke Reskrim') $statusClass = 'bg-indigo-100 text-indigo-800';
                            elseif ($pengaduan->status == 'Diproses') $statusClass = 'bg-purple-100 text-purple-800';
                            elseif ($pengaduan->status == 'Selesai') $statusClass = 'bg-green-100 text-green-800';
                        @endphp
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                        {{-- Anda perlu mendefinisikan relasi 'verifier' dan 'assignee' di model Pengaduan agar ini berfungsi --}}
                        <p class="text-xs text-gray-500 mt-4">Diverifikasi oleh: {{ $pengaduan->verifier->name ?? 'Belum ada' }}</p>
                        <p class="text-xs text-gray-500">Diteruskan ke: {{ $pengaduan->assignee->name ?? 'Belum ada' }}</p>
                    </div>

                    {{-- Form Aksi Verifikasi --}}
                    @if ($pengaduan->status === 'Baru')
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        {{-- [PERBAIKAN] Menggunakan nama rute yang benar --}}
                        <form action="{{ route('admin.pengaduan.verify', $pengaduan) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">Verifikasi Laporan Ini</button>
                        </form>
                    </div>
                    @endif

                    {{-- Form Aksi Teruskan ke Reskrim --}}
                    @if ($pengaduan->status === 'Diverifikasi' && !$pengaduan->assigned_to_reskrim_id)
                     <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                         <h3 class="text-lg font-bold text-gray-800 mb-4">Teruskan Laporan</h3>
                         {{-- [PERBAIKAN] Menggunakan nama rute yang benar --}}
                         <form action="{{ route('admin.pengaduan.forward', $pengaduan) }}" method="POST">
                             @csrf
                             <label for="assigned_to_reskrim_id" class="text-sm font-medium text-gray-700">Pilih Anggota Reskrim</label>
                             <select name="assigned_to_reskrim_id" id="assigned_to_reskrim_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                 <option value="">-- Pilih Anggota --</option>
                                 @foreach ($reskrimUsers as $user)
                                     <option value="{{ $user->id }}">{{ $user->name }}</option>
                                 @endforeach
                             </select>
                             <button type="submit" class="mt-4 w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition">Teruskan ke Reskrim</button>
                         </form>
                     </div>
                    @endif

                    {{-- Tombol Aksi STPL --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <a href="{{ route('admin.stpl.create', $pengaduan->id) }}" 
                           class="block w-full text-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition ease-in-out duration-150">
                            Buat / Lihat STPL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const lat = {{ $pengaduan->latitude ?? 'null' }};
            const lng = {{ $pengaduan->longitude ?? 'null' }};

            if (lat && lng) {
                const map = L.map('map').setView([lat, lng], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'Â© OpenStreetMap contributors'
                }).addTo(map);

                L.marker([lat, lng]).addTo(map)
                    .bindPopup('Lokasi kejadian yang dilaporkan.');
            } else {
                document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
            }
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\mentah\stpl\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat STPL untuk Laporan: {{ $pengaduan->nama_pelapor }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Form ini mengarah ke route 'admin.stpl.store' --}}
                    <form action="{{ route('admin.stpl.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="space-y-6">
                            <!-- Detail Laporan (Read-only) -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Data Laporan Terkait</h3>
                                <div class="mt-2 p-4 bg-gray-50 rounded-md border">
                                    <p><strong>Pelapor:</strong> {{ $pengaduan->nama_pelapor }}</p>
                                    <p><strong>NIK:</strong> {{ $pengaduan->nik }}</p>
                                </div>
                            </div>
                            
                            <!-- Input untuk STPL -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Detail STPL</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="nomor_stpl" class="block font-medium text-sm text-gray-700">Nomor STPL</label>
                                        <input type="text" id="nomor_stpl" name="nomor_stpl" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    </div>
                                    <div>
                                        <label for="tanggal_dibuat" class="block font-medium text-sm text-gray-700">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" value="{{ date('Y-m-d') }}" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                    Simpan dan Unduh STPL
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\mentah\stpl\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen STPL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Halaman ini akan menampilkan daftar semua Surat Tanda Penerimaan Laporan (STPL) yang telah dibuat.</p>
                    {{-- Nanti di sini akan ada tabel data STPL --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\mentah\stpl\pdf_template.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; font-size: 12pt; margin: 2.5cm; }
        .kop-surat { text-align: center; border-bottom: 3px solid black; padding-bottom: 10px; margin-bottom: 30px; }
        .kop-surat h3, .kop-surat h4 { margin: 0; }
        .judul { text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: 5px; }
        .nomor-surat { text-align: center; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; }
        td { vertical-align: top; padding: 2px 0; }
        .label { width: 180px; }
        .penutup { margin-top: 40px; }
        .tanda-tangan { margin-top: 80px; width: 300px; float: right; text-align: center; }
    </style>
</head>
<body>

    <div class="kop-surat">
        <h3>KEPOLISIAN NEGARA REPUBLIK INDONESIA</h3>
        <h4>DAERAH GORONTALO</h4>
        <p style="margin: 0;">Jl. Jenderal Sudirman No. 123, Gorontalo</p>
    </div>

    <p class="judul">SURAT TANDA PENERIMAAN LAPORAN</p>
    <p class="nomor-surat">Nomor: {{ $stpl->nomor_stpl }}</p>

    <p>Pada hari ini, {{ $stpl->tanggal_dibuat->translatedFormat('l, d F Y') }}, yang bertanda tangan di bawah ini, selaku Penyidik/Penyidik Pembantu pada kantor Kepolisian tersebut di atas, telah menerima laporan dari:</p>

    <table>
        <tr><td class="label">Nama</td><td>: {{ $pengaduan->nama_pelapor }}</td></tr>
        <tr><td class="label">NIK</td><td>: {{ $pengaduan->nik }}</td></tr>
        <tr><td class="label">Pekerjaan</td><td>: {{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">Alamat</td><td>: {{ $pengaduan->alamat_pelapor ?? '-' }}</td></tr>
    </table>

    <p class="penutup">Dengan uraian kejadian secara singkat sebagai berikut:</p>
    <p>{{ $pengaduan->isi_laporan }}</p>

    <p class="penutup">Demikian Surat Tanda Penerimaan Laporan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>

    <div class="tanda-tangan">
        <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
        <p>Yang Menerima Laporan,</p>
        <br><br><br><br>
        {{-- Mengambil nama admin yang login saat membuat STPL --}}
        <p style="text-decoration: underline; font-weight: bold;">{{ $stpl->creator->name }}</p>
        <p>NRP. ......................</p>
    </div>

</body>
</html>

===== resources\views\admin\mentah\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card Total Laporan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Total Laporan</h3>
                    <p class="mt-1 text-4xl font-bold text-gray-900">{{ $totalLaporan ?? 0 }}</p>
                </div>
                <!-- Card Laporan Baru -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Laporan Baru</h3>
                    <p class="mt-1 text-4xl font-bold text-blue-600">{{ $laporanBaru ?? 0 }}</p>
                </div>
                <!-- Card Laporan Diverifikasi -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Diverifikasi</h3>
                    <p class="mt-1 text-4xl font-bold text-yellow-500">{{ $laporanDiverifikasi ?? 0 }}</p>
                </div>
                <!-- Card Laporan Selesai -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <h3 class="text-lg font-medium text-gray-500">Selesai</h3>
                    <p class="mt-1 text-4xl font-bold text-green-600">{{ $laporanSelesai ?? 0 }}</p>
                </div>
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p>Gunakan menu navigasi di sebelah kiri untuk mengelola pengaduan dan fitur lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\mentah\show.blade.php =====
{{-- Menambahkan Aset Leaflet di Halaman Ini Saja --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style> #map { height: 300px; z-index: 10;} </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Notifikasi Sukses/Error --}}
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan --}}
                <div class="md:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                            <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                <dt class="font-medium text-gray-500">Nama</dt><dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">No. HP</dt><dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                <dt class="font-medium text-gray-500">Umur</dt><dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500">Pekerjaan</dt><dd class="text-gray-900">{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</dd>
                                <dt class="font-medium text-gray-500 col-span-2">Alamat</dt><dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                            </dl>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                            <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                            <div id="map" class="mt-2 rounded-lg"></div>
                        </div>

                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi --}}
                <div class="space-y-6">
                    {{-- Box Status --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                         <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Baru') $statusClass = 'bg-blue-100 text-blue-800';
                            elseif ($pengaduan->status == 'Diverifikasi') $statusClass = 'bg-yellow-100 text-yellow-800';
                            elseif ($pengaduan->status == 'Diteruskan ke Reskrim') $statusClass = 'bg-indigo-100 text-indigo-800';
                            elseif ($pengaduan->status == 'Diproses') $statusClass = 'bg-purple-100 text-purple-800';
                            elseif ($pengaduan->status == 'Selesai') $statusClass = 'bg-green-100 text-green-800';
                        @endphp
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                        <p class="text-xs text-gray-500 mt-4">Diverifikasi oleh: {{ $pengaduan->verifier->name ?? 'Belum ada' }}</p>
                        <p class="text-xs text-gray-500">Diteruskan ke: {{ $pengaduan->assignee->name ?? 'Belum ada' }}</p>
                    </div>

                    {{-- Form Aksi Verifikasi --}}
                    @if ($pengaduan->status === 'Baru')
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <form action="{{ route('admin.dashboard.verify', $pengaduan) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">Verifikasi Laporan Ini</button>
                        </form>
                    </div>
                    @endif

                    {{-- Form Aksi STPL --}}
                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('admin.stpl.create', $pengaduan->id) }}" 
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition ease-in-out duration-150">
                            Buat STPL
                        </a>
                    </div>
                    
                    {{-- Form Aksi Teruskan ke Reskrim --}}
                    @if ($pengaduan->status === 'Diverifikasi' && !$pengaduan->assigned_to_reskrim_id)
                     <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Teruskan Laporan</h3>
                        <form action="{{ route('admin.dashboard.forward', $pengaduan) }}" method="POST">
                            @csrf
                            <label for="assigned_to_reskrim_id" class="text-sm font-medium text-gray-700">Pilih Anggota Reskrim</label>
                            <select name="assigned_to_reskrim_id" id="assigned_to_reskrim_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">-- Pilih Anggota --</option>
                                @foreach ($reskrimUsers as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="mt-4 w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition">Teruskan ke Reskrim</button>
                        </form>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Cek jika ada data latitude dan longitude
            const lat = {{ $pengaduan->latitude ?? 'null' }};
            const lng = {{ $pengaduan->longitude ?? 'null' }};

            if (lat && lng) {
                const map = L.map('map').setView([lat, lng], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'Â© OpenStreetMap contributors'
                }).addTo(map);

                L.marker([lat, lng]).addTo(map)
                    .bindPopup('Lokasi kejadian yang dilaporkan.');
            } else {
                // Jika tidak ada koordinat, tampilkan pesan
                document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
            }
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\pengaduan\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- [PENAMBAHAN] Form Filter -->
                    <form id="filter-form" method="GET" action="{{ route('admin.pengaduan.list') }}">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <!-- Filter Pencarian -->
                            <div>
                                <label for="search" class="text-sm font-medium text-gray-700">Cari Pelapor/NIK</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..." value="{{ request('search') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <!-- Filter Status -->
                            <div>
                                <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="">Semua Status</option>
                                    <option value="Baru" {{ request('status') == 'Baru' ? 'selected' : '' }}>Baru</option>
                                    <option value="Diverifikasi" {{ request('status') == 'Diverifikasi' ? 'selected' : '' }}>Diverifikasi</option>
                                    <option value="Diteruskan ke Reskrim" {{ request('status') == 'Diteruskan ke Reskrim' ? 'selected' : '' }}>Diteruskan</option>
                                    <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>
                            <!-- Filter Tanggal -->
                            <div>
                                <label for="start_date" class="text-sm font-medium text-gray-700">Dari Tanggal</label>
                                <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label for="end_date" class="text-sm font-medium text-gray-700">Sampai Tanggal</label>
                                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('admin.pengaduan.list') }}" class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $pengaduan->created_at->format('d M Y, H:i') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @php
                                                $statusClass = '';
                                                if ($pengaduan->status == 'Baru') $statusClass = 'bg-blue-100 text-blue-800';
                                                elseif ($pengaduan->status == 'Diverifikasi') $statusClass = 'bg-yellow-100 text-yellow-800';
                                                elseif ($pengaduan->status == 'Diteruskan ke Reskrim') $statusClass = 'bg-indigo-100 text-indigo-800';
                                                elseif ($pengaduan->status == 'Diproses') $statusClass = 'bg-purple-100 text-purple-800';
                                                elseif ($pengaduan->status == 'Diteruskan ke Penyidik') $statusClass = 'bg-teal-100 text-teal-800';
                                                elseif ($pengaduan->status == 'Selesai') $statusClass = 'bg-green-100 text-green-800';
                                                elseif ($pengaduan->status == 'Dikembalikan') $statusClass = 'bg-red-100 text-red-800';
                                            @endphp
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ $pengaduan->status }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Lihat Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                       
                        {{ $pengaduans->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- [PENAMBAHAN] Script untuk filter otomatis --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterForm = document.getElementById('filter-form');
            const inputs = filterForm.querySelectorAll('input, select');
            let timer;

            inputs.forEach(input => {
                // Gunakan 'input' untuk text search agar lebih responsif
                const eventType = input.type === 'text' ? 'input' : 'change';

                input.addEventListener(eventType, function () {
                    // Tunda submit sedikit agar tidak memberatkan server saat mengetik
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        filterForm.submit();
                    }, 500); // Jeda 0.5 detik
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\pengaduan\show.blade.php =====
{{-- Menambahkan Aset Leaflet di Halaman Ini Saja --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 300px;
            z-index: 10;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Notifikasi Sukses/Error --}}
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan --}}
                <div class="md:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                            <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                <dt class="font-medium text-gray-500">Nama</dt>
                                <dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>

                                <dt class="font-medium text-gray-500">NIK</dt>
                                <dd class="text-gray-900">{{ $pengaduan->nik ?? '-' }}</dd>

                                <dt class="font-medium text-gray-500">Tempat, Tanggal Lahir</dt>
                                <dd class="text-gray-900">{{ $pengaduan->tempat_lahir ?? '' }},
                                    {{ $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('d M Y') : '-' }}
                                </dd>

                                <dt class="font-medium text-gray-500">Jenis Kelamin</dt>
                                <dd class="text-gray-900">{{ $pengaduan->jenis_kelamin ?? '-' }}</dd>

                                <dt class="font-medium text-gray-500">Agama</dt>
                                <dd class="text-gray-900">{{ $pengaduan->agama ?? '-' }}</dd>

                                <dt class="font-medium text-gray-500">Pekerjaan</dt>
                                <dd class="text-gray-900">{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</dd>

                                <dt class="font-medium text-gray-500">No. HP</dt>
                                <dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>

                                <dt class="text-sm font-medium text-gray-500">Email Pelapor</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $pengaduan->email_pelapor }}</dd>

                                <dt class="font-medium text-gray-500">Umur</dt>
                                <dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>

                                <dt class="font-medium text-gray-500 col-span-2">Alamat</dt>
                                <dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                            </dl>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                            <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                            <div id="map" class="mt-2 rounded-lg"></div>
                        </div>
                    </div>
                </div>


                {{-- Kolom Kanan: Foto, Status & Aksi --}}
                <div class="space-y-6">
                    {{-- Foto KTP (tidak berubah) --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Foto KTP Pelapor</h3>
                        @if ($pengaduan->foto_ktp)
                            <a href="{{ asset('storage/' . $pengaduan->foto_ktp) }}" target="_blank">
                                <img src="{{ asset('storage/' . $pengaduan->foto_ktp) }}" alt="Foto KTP"
                                    class="w-full h-auto rounded-lg border hover:opacity-90 transition">
                            </a>
                        @else
                            <p class="text-gray-500 text-sm">Tidak ada foto KTP yang diunggah.</p>
                        @endif
                    </div>

                    @if ($pengaduan->bukti->isNotEmpty())
                        <div class="md:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Bukti Tambahan</dt>
                            <dd class="mt-2 text-sm text-gray-900">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    @foreach ($pengaduan->bukti as $item)
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                {{-- Icon Lampiran --}}
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.497a1.5 1.5 0 012.121-2.121l-1.414-1.414a1 1 0 111.414-1.414l1.414 1.414a3.5 3.5 0 11-4.95-4.95l.497-.497h.001l7-7a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span
                                                    class="ml-2 flex-1 w-0 truncate">{{ basename($item->file_path) }}</span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                                    class="font-medium text-blue-600 hover:text-blue-500">Lihat</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                    @endif


                    {{-- Box Status (tidak berubah) --}}
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                        <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Baru') {
                                $statusClass = 'bg-blue-100 text-blue-800';
                            } elseif ($pengaduan->status == 'Diverifikasi') {
                                $statusClass = 'bg-yellow-100 text-yellow-800';
                            } elseif ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                $statusClass = 'bg-indigo-100 text-indigo-800';
                            } elseif ($pengaduan->status == 'Diproses') {
                                $statusClass = 'bg-purple-100 text-purple-800';
                            } elseif ($pengaduan->status == 'Diteruskan ke Penyidik') {
                                $statusClass = 'bg-teal-100 text-teal-800';
                            } elseif ($pengaduan->status == 'Dikembalikan') {
                                $statusClass = 'bg-red-100 text-red-800';
                            }
                        @endphp
                        <span
                            class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">{{ $pengaduan->status }}</span>
                        <p class="text-xs text-gray-500 mt-4">Diverifikasi oleh:
                            {{ $pengaduan->verifier->name ?? 'Belum ada' }}</p>
                        <p class="text-xs text-gray-500">Diteruskan ke: {{ $pengaduan->assignee->name ?? 'Belum ada' }}
                        </p>
                    </div>

                    {{-- ====================================================== --}}
                    {{-- [PERUBAHAN UTAMA] Logika Aksi yang Sudah Diperbaiki     --}}
                    {{-- ====================================================== --}}

                    {{-- Form Aksi untuk Laporan Baru --}}
                    @if ($pengaduan->status === 'Baru')
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg space-y-4">
                            {{-- Tombol Verifikasi --}}
                            <form action="{{ route('admin.pengaduan.verify', $pengaduan) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition">Verifikasi
                                    Laporan Ini</button>
                            </form>

                            {{-- [PENAMBAHAN] Tombol Kembalikan Laporan --}}
                            <button type="button" id="kembalikan-btn"
                                class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 transition">
                                Kembalikan Laporan
                            </button>
                        </div>
                    @endif

                    {{-- Form Aksi Teruskan ke Reskrim (muncul jika sudah diverifikasi & belum diteruskan) --}}
                    @if ($pengaduan->status === 'Diverifikasi' && !$pengaduan->assigned_to_reskrim_id)
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Teruskan Laporan</h3>
                            <form action="{{ route('admin.pengaduan.forward', $pengaduan) }}" method="POST">
                                @csrf
                                <label for="assigned_to_reskrim_id" class="text-sm font-medium text-gray-700">Pilih
                                    Anggota Reskrim</label>
                                <select name="assigned_to_reskrim_id" id="assigned_to_reskrim_id"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    <option value="">-- Pilih Anggota --</option>
                                    @foreach ($reskrimUsers as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    class="mt-4 w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition">Teruskan
                                    ke Reskrim</button>
                            </form>
                        </div>
                    @endif

                    {{-- Aksi STPL (muncul jika sudah diverifikasi & STPL belum ada) --}}
                    {{-- [PERBAIKAN] Aksi STPL (muncul jika status BUKAN 'Baru' & BUKAN 'Dikembalikan', DAN STPL belum ada) --}}
                    @if (!in_array($pengaduan->status, ['Baru', 'Dikembalikan']) && !$pengaduan->stpl)
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                            <a href="{{ route('admin.stpl.create', $pengaduan->id) }}"
                                class="block w-full text-center px-4 py-2 bg-green-600 border rounded-md font-semibold text-xs text-white uppercase hover:bg-green-700">
                                Buat STPL (Opsional)
                            </a>
                        </div>
                    @elseif ($pengaduan->stpl)
                        {{-- Info STPL (muncul jika STPL sudah ada, tidak peduli statusnya apa) --}}
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg text-center">
                            <p class="text-sm font-medium text-green-700">âœ” STPL sudah dibuat.</p>
                            <a href="{{ route('admin.stpl.download', $pengaduan->stpl->id) }}"
                                class="text-indigo-600 hover:text-indigo-900 text-sm">
                                Cetak Ulang
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const lat = {{ $pengaduan->latitude ?? 'null' }};
                const lng = {{ $pengaduan->longitude ?? 'null' }};
                if (lat && lng) {
                    const map = L.map('map').setView([lat, lng], 15);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                    L.marker([lat, lng]).addTo(map).bindPopup('Lokasi kejadian yang dilaporkan.');
                } else {
                    document.getElementById('map').innerHTML =
                        '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
                }

                @if (session('stpl_download_url'))
                    setTimeout(function() {
                        window.location.href = '{{ session('stpl_download_url') }}';
                    }, 1500);
                @endif

                //pembatas kembalikan
                const kembalikanBtn = document.getElementById('kembalikan-btn');
                if (kembalikanBtn) {
                    kembalikanBtn.addEventListener('click', function() {
                        Swal.fire({
                            title: 'Kembalikan Laporan',
                            html: `
                            <p class="text-sm text-gray-600 mb-4">Tuliskan alasan pengembalian laporan. Catatan ini akan dapat dilihat oleh pelapor.</p>
                            <textarea id="catatan-pengembalian" class="swal2-textarea" placeholder="Contoh: Foto KTP tidak jelas, mohon unggah ulang dengan gambar yang lebih terang."></textarea>
                        `,
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Ya, Kembalikan!',
                            cancelButtonText: 'Batal',
                            preConfirm: () => {
                                const catatan = document.getElementById('catatan-pengembalian')
                                    .value;
                                if (!catatan || catatan.length < 10) {
                                    Swal.showValidationMessage(
                                        'Catatan wajib diisi (minimal 10 karakter).');
                                    return false;
                                }
                                return catatan;
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Buat form dinamis dan submit
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = '{{ route('admin.pengaduan.kembalikan', $pengaduan) }}';

                                const csrfToken = document.createElement('input');
                                csrfToken.type = 'hidden';
                                csrfToken.name = '_token';
                                csrfToken.value = '{{ csrf_token() }}';
                                form.appendChild(csrfToken);

                                const catatanInput = document.createElement('input');
                                catatanInput.type = 'hidden';
                                catatanInput.name = 'catatan';
                                catatanInput.value = result.value; // Ambil catatan dari hasil popup
                                form.appendChild(catatanInput);

                                document.body.appendChild(form);
                                form.submit();
                            }
                        });
                    });
                }
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\admin\stpl\create.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat STPL untuk Laporan: {{ $pengaduan->nama_pelapor }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" x-data="{ nomor_option: 'otomatis' }">
                    <form action="{{ route('admin.stpl.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                        <div class="space-y-6">
                            {{-- Bagian Detail STPL (Nomor & Tanggal) --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Detail STPL</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="tanggal_dibuat"
                                            class="block font-medium text-sm text-gray-700">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" name="tanggal_dibuat"
                                            value="{{ old('tanggal_dibuat', date('Y-m-d')) }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tanggal_dibuat')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block font-medium text-sm text-gray-700">Opsi Nomor STPL</label>
                                        <div class="flex items-center space-x-6">
                                            <label class="inline-flex items-center"><input type="radio"
                                                    x-model="nomor_option" name="nomor_stpl_option" value="otomatis"
                                                    class="form-radio"><span class="ml-2">Otomatis</span></label>
                                            <label class="inline-flex items-center"><input type="radio"
                                                    x-model="nomor_option" name="nomor_stpl_option" value="manual"
                                                    class="form-radio"><span class="ml-2">Manual</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="nomor_option === 'manual'" x-cloak class="mt-4">
                                    <label for="nomor_stpl" class="block font-medium text-sm text-gray-700">Nomor STPL
                                        Manual</label>
                                    <input type="text" id="nomor_stpl" name="nomor_stpl"
                                        value="{{ old('nomor_stpl') }}"
                                        class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"
                                        placeholder="Contoh: STPL/123/VII/2025/SPKT">
                                    @error('nomor_stpl')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- [PENAMBAHAN] Bagian Detail Kejadian --}}
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Detail Kejadian</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="tindak_pidana"
                                            class="block font-medium text-sm text-gray-700">Tindak Pidana</label>
                                        <input type="text" id="tindak_pidana" name="tindak_pidana"
                                            value="{{ old('tindak_pidana') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tindak_pidana')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="pasal_dilanggar"
                                            class="block font-medium text-sm text-gray-700">Pasal yang Dilanggar</label>
                                        <input type="text" id="pasal_dilanggar" name="pasal_dilanggar"
                                            value="{{ old('pasal_dilanggar') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('pasal_dilanggar')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="hari_kejadian" class="block font-medium text-sm text-gray-700">Hari
                                            Kejadian</label>
                                        <input type="text" id="hari_kejadian" name="hari_kejadian"
                                            value="{{ old('hari_kejadian') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('hari_kejadian')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="tanggal_kejadian"
                                            class="block font-medium text-sm text-gray-700">Tanggal Kejadian</label>
                                        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian"
                                            value="{{ old('tanggal_kejadian') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('tanggal_kejadian')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="tempat_kejadian"
                                            class="block font-medium text-sm text-gray-700">Tempat Kejadian Perkara
                                            (TKP)</label>
                                        <textarea id="tempat_kejadian" name="tempat_kejadian" rows="3"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>{{ old('tempat_kejadian') }}</textarea>
                                        @error('tempat_kejadian')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="uraian_kejadian"
                                            class="block font-medium text-sm text-gray-700">Uraian Kejadian</label>
                                        <textarea id="uraian_kejadian" name="uraian_kejadian" rows="3"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>{{ old('uraian_kejadian') }}</textarea>
                                        @error('uraian_kejadian')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="terlapor"
                                            class="block font-medium text-sm text-gray-700">Terlapor</label>
                                        <input type="text" id="terlapor" name="terlapor"
                                            value="{{ old('terlapor') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('terlapor')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Detail Penerima Laporan</h3>
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="nama_penerima"
                                            class="block font-medium text-sm text-gray-700">Nama Penerima</label>
                                        {{-- Diisi otomatis dengan nama admin yang login --}}
                                        <input type="text" id="nama_penerima" name="nama_penerima"
                                            value="{{ old('nama_penerima', Auth::user()->name) }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('nama_penerima')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="nrp_penerima"
                                            class="block font-medium text-sm text-gray-700">NRP</label>
                                        <input type="text" id="nrp_penerima" name="nrp_penerima"
                                            value="{{ old('nrp_penerima') }}"
                                            class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                                        @error('nrp_penerima')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-6">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border rounded-md font-semibold text-xs text-white uppercase hover:bg-blue-700">
                                    Simpan dan Unduh STPL
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\admin\stpl\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen STPL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Daftar Surat Tanda Penerimaan Laporan</h3>

                    <!-- [PENAMBAHAN] Form Filter -->
                    <form id="filter-form" method="GET" action="{{ route('admin.stpl.index') }}">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <!-- Filter Pencarian -->
                            <div class="md:col-span-1">
                                <label for="search" class="text-sm font-medium text-gray-700">Cari No. STPL / Pelapor</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..." value="{{ request('search') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <!-- Filter Tanggal -->
                            <div>
                                <label for="start_date" class="text-sm font-medium text-gray-700">Dari Tanggal</label>
                                <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div>
                                <label for="end_date" class="text-sm font-medium text-gray-700">Sampai Tanggal</label>
                                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <a href="{{ route('admin.stpl.index') }}" class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. STPL</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Dibuat</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($stpls as $stpl)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->nomor_stpl }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $stpl->tanggal_dibuat->format('d M Y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            {{-- [PERBAIKAN] Tombol Download --}}
                                            <a href="{{ route('admin.stpl.download', $stpl->id) }}" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data STPL yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{-- [PENTING] Menambahkan withQueryString agar filter tetap ada saat ganti halaman --}}
                        {{ $stpls->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk filter otomatis --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterForm = document.getElementById('filter-form');
            const inputs = filterForm.querySelectorAll('input, select');
            let timer;

            inputs.forEach(input => {
                const eventType = input.type === 'text' ? 'input' : 'change';
                input.addEventListener(eventType, function () {
                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        filterForm.submit();
                    }, 500); // Jeda 0.5 detik
                });
            });
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\admin\stpl\pdf_template.blade.php =====
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        /* CSS Dioptimalkan Maksimal untuk Satu Halaman dengan Margin 1cm */
        @page {
            margin: 1cm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.3;
        }

        p {
            margin: 5px 0;
        }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .underline {
            text-decoration: underline;
        }

        .kop-surat {
            text-align: center;
            border-bottom: 3px solid black;
            padding-bottom: 8px;
            margin-bottom: 10px;
        }

        .kop-surat .line1 {
            font-size: 14pt;
            font-weight: bold;
        }

        .kop-surat .line2 {
            font-size: 14pt;
        }

        .judul-container p {
            margin-top: 1px;
            margin-bottom: 1px;
        }

        .content-table {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .content-table td {
            vertical-align: top;
            padding: 0;
        }

        .content-table .label {
            width: 30%;
        }

        .content-table .separator {
            width: 5%;
            text-align: center;
        }

        .penutup {
            margin-top: 15px;
        }

        /* PERUBAHAN CSS UNTUK TANDA TANGAN */
        .signature-section {
            margin-top: 30px;
            /* Memberi sedikit ruang tambahan */
            overflow: auto;
            /* Penting untuk 'contain' float elements */
            width: 100%;
        }

        /* Blok untuk tanda tangan Pelapor di KIRI */
        .signature-block-left {
            width: 45%;
            float: left;
            text-align: center;
        }

        /* Blok untuk tanda tangan Penerima di KANAN */
        .signature-block-right {
            width: 45%;
            float: right;
            text-align: center;
        }

        .signature-section p {
            margin: 2px 0;
        }

        .signature-section {
            /* Memberi ruang kosong untuk tanda tangan */
            height: 50px;
        }

        .name-space {
            height: 100px;
        }

        .signature-section .name {
            font-weight: bold;
            text-decoration: underline;
        }

        /* Khusus untuk nama pelapor, sesuai gambar */
        .signature-block-left .name {
            font-weight: normal;
            /* Tidak bold */
        }
    </style>
</head>

<body>

    <div class="kop-surat">
        <div class="line1">KEPOLISIAN NEGARA REPUBLIK INDONESIA</div>
        <div class="line1">DAERAH GORONTALO</div>
        <div class="line2">SEKTOR {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</div>
    </div>

    <div class="text-center judul-container">
        <p class="judul underline font-bold" style="margin-bottom: 5px;">SURAT TANDA PENERIMAAN LAPORAN</p>
        <p>Nomor: {{ $stpl->nomor_stpl }}</p>
    </div>

    <p style="margin-top: 20px;">
        Berdasarkan Laporan Polisi Nomor: {{ $stpl->nomor_stpl }} tanggal
        {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}, dengan ini diterangkan bahwa pada hari ini
        {{ $stpl->tanggal_dibuat->translatedFormat('l') }} tanggal
        {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }} telah diterima Laporan dari:
    </p>

    <table class="content-table">
        <tr>
            <td class="label">Nama</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->nama_pelapor }}</td>
        </tr>
        <tr>
            <td class="label">NIK</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->nik }}</td>
        </tr>
        <tr>
            <td class="label">Kewarganegaraan</td>
            <td class="separator">:</td>
            <td>INDONESIA</td>
        </tr>
        <tr>
            <td class="label">Jenis Kelamin</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->jenis_kelamin ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Tempat/Tanggal Lahir</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->tempat_lahir ?? '' }},
                {{ $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('d-m-Y') : '-' }}</td>
        </tr>
        <tr>
            <td class="label">Umur</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->umur_pelapor ? $pengaduan->umur_pelapor . ' Tahun' : '-' }}</td>
        </tr>
        <tr>
            <td class="label">Pekerjaan</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Agama</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->agama ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->alamat_pelapor ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">No. Telp/HP</td>
            <td class="separator">:</td>
            <td>{{ $pengaduan->no_hp_pelapor }}</td>
        </tr>
    </table>

    <p>
        Telah melaporkan tentang dugaan Tindak Pidana <strong>{{ $stpl->tindak_pidana }}</strong>, sebagaimana dimaksud
        dalam Pasal <strong>{{ $stpl->pasal_dilanggar }}</strong>, yang terjadi pada hari
        <strong>{{ $stpl->hari_kejadian }}</strong> tanggal
        <strong>{{ $stpl->tanggal_kejadian->translatedFormat('d F Y') }}</strong> di
        <strong>{{ $stpl->tempat_kejadian }}</strong> dengan terlapor <strong>{{ $stpl->terlapor }}</strong>.
    </p>

    <p style="margin-top: 2px;">Uraian singkat kejadian: {{ $stpl->uraian_kejadian }}</p>

    <p class="penutup">
        Demikian Surat Tanda Penerimaan Laporan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana
        mestinya.
    </p>

    <!-- PERUBAHAN HTML: Bagian Tanda Tangan -->
    <div class="signature-section">
        <!-- Tanda Tangan Pelapor (KIRI) -->
        <div class="signature-block-left">
            <!-- Menambahkan paragraf kosong untuk menyejajarkan posisi dengan blok kanan -->
            <p>&nbsp;</p>
            <p>Pelapor,</p>
            <p>&nbsp;</p>
            <div class="name-space"></div> <!-- Ruang untuk ttd basah -->
            <br>
            <p class="name">({{ strtoupper($pengaduan->nama_pelapor) }})</p>
        </div>

        <!-- Tanda Tangan Penerima Laporan (KANAN) -->
        <div class="signature-block-right">
            <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
            <p>Yang Menerima Laporan,</p>
            <p style="margin-bottom: 5px;">KA SPKT POLSEK {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}
            </p>

            <div class="name-space"></div> <!-- Ruang untuk ttd basah & stempel -->

            {{-- [PERUBAHAN] Menampilkan data dari input form --}}
            <p class="name">{{ $stpl->nama_penerima }}</p>
            <p>NRP. {{ $stpl->nrp_penerima }}</p>
        </div>
    </div>

</body>

</html>

===== resources\views\admin\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Kartu Statistik Utama --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('admin.pengaduan.list') }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Laporan</p><p class="mt-1 text-3xl font-bold text-gray-900">{{ $totalLaporan ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Baru']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Laporan Baru</p><p class="mt-1 text-3xl font-bold text-blue-600">{{ $laporanBaru ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Diverifikasi']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Diverifikasi</p><p class="mt-1 text-3xl font-bold text-yellow-500">{{ $laporanDiverifikasi ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
                <a href="{{ route('admin.pengaduan.list', ['status' => 'Selesai']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Selesai</p><p class="mt-1 text-3xl font-bold text-green-600">{{ $laporanSelesai ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div></div></a>
            </div>

            <!-- Grid untuk Analitik -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Kolom Kiri: Grafik Tren Laporan -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Tren Laporan Masuk</h3>
                            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                                <a href="{{ route('admin.dashboard', ['periode' => '7hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '7hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">7 Hari</a>
                                <a href="{{ route('admin.dashboard', ['periode' => '30hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '30hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">30 Hari</a>
                                <a href="{{ route('admin.dashboard', ['periode' => '90hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '90hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">90 Hari</a>
                            </div>
                        </div>
                        <div><div id="lineChart"></div></div>
                    </div>
                </div>
                
                <!-- Kolom Kanan: Grafik Beban Kerja Reskrim -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4">Beban Kerja Tim Reskrim (Tugas Aktif)</h3>
                        <div><div id="barChart"></div></div>
                    </div>
                </div>
            </div>

            <!-- Daftar Laporan Mendesak -->
            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <h3 class="text-lg font-semibold mb-4">Laporan Baru yang Perlu Segera Ditindaklanjuti</h3>
                     <ul class="divide-y divide-gray-200">
                        @forelse ($laporanMendesak as $laporan)
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">{{ $laporan->nama_pelapor }}</p>
                                    <p class="text-xs text-gray-500">Masuk {{ $laporan->created_at->diffForHumans() }}</p>
                                </div>
                                <a href="{{ route('admin.pengaduan.show', $laporan) }}" class="text-sm text-indigo-600 hover:text-indigo-900">Lihat Laporan</a>
                            </li>
                        @empty
                            <li class="py-3 text-center text-sm text-gray-500">Tidak ada laporan baru yang menunggu verifikasi.</li>
                        @endforelse
                     </ul>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Skrip untuk Grafik Garis (Line Chart)
            var lineChart = new ApexCharts(document.querySelector("#lineChart"), {
                series: [{ name: "Laporan Masuk", data: {!! json_encode($lineChartData) !!} }],
                chart: { type: 'area', height: 300, toolbar: { show: false }, zoom: { enabled: false } },
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 2 },
                xaxis: { type: 'datetime', labels: { format: 'dd MMM' } },
                yaxis: { min: 0, tickAmount: 4, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { x: { format: 'dd MMMM yyyy' } },
                fill: { type: 'gradient', gradient: { opacityFrom: 0.6, opacityTo: 0.1 } },
            });
            lineChart.render();

            // Skrip untuk Grafik Batang (Bar Chart)
            var barChart = new ApexCharts(document.querySelector("#barChart"), {
                series: [{ name: 'Tugas Aktif', data: {!! json_encode($barChartData['data']) !!} }],
                chart: { type: 'bar', height: 300, toolbar: { show: false } },
                plotOptions: { bar: { horizontal: false, columnWidth: '50%' } },
                dataLabels: { enabled: false },
                xaxis: { categories: {!! json_encode($barChartData['labels']) !!} },
                yaxis: { title: { text: 'Jumlah Laporan' }, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { y: { title: { formatter: () => 'Tugas Aktif' } } }
            });
            barChart.render();
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\auth\confirm-password.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\forgot-password.blade.php =====
<x-auth-layout>
    <div class="text-center mb-4">
        <h1 class="text-2xl font-semibold text-blue-700">Lupa Password</h1>
    </div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Kirim Tautan Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-layout>

===== resources\views\auth\login.blade.php =====
{{-- [PERUBAHAN] Menggunakan layout baru yang lebih simpel --}}
<x-auth-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6">
        <h1 class="text-2xl font-semibold text-blue-700">Masuk Petugas</h1>
        <p class="text-gray-500 mt-2">Silakan login untuk masuk ke dasbor Anda.</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Sandi')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-500 hover:text-blue-700 transition"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-layout>

===== resources\views\auth\register.blade.php =====
<x-auth-layout>
    <div class="text-center mb-6">
        <h1 class="text-2xl font-semibold text-blue-700">Daftar Akun Petugas</h1>
        <p class="text-gray-500 mt-2">Buat akun baru untuk Admin atau Reskrim.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="role" :value="__('Peran (Role)')" />
            <select name="role" id="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="admin">Admin</option>
                <option value="reskrim">Reskrim</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-layout>

===== resources\views\auth\reset-password.blade.php =====
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

===== resources\views\auth\verify-email.blade.php =====
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>

===== resources\views\components\application-logo.blade.php =====
<svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
</svg>

===== resources\views\components\auth-layout.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-50 to-blue-50">
            <div>
                <a href="/" class="text-4xl font-bold text-blue-700 tracking-tight">
                    Polresta Gorontalo Kota 
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

===== resources\views\components\auth-session-status.blade.php =====
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif

===== resources\views\components\danger-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\dropdown-link.blade.php =====
<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>

===== resources\views\components\dropdown.blade.php =====
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

===== resources\views\components\input-error.blade.php =====
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

===== resources\views\components\input-label.blade.php =====
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

===== resources\views\components\modal.blade.php =====
@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>

===== resources\views\components\nav-link.blade.php =====
@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center gap-2 w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-900 font-medium'
                : 'flex items-center gap-2 w-full px-4 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\primary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\responsive-nav-link.blade.php =====
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

===== resources\views\components\secondary-button.blade.php =====
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

===== resources\views\components\text-input.blade.php =====
@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

===== resources\views\emails\pengaduan-diperbaiki.blade.php =====
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perbaikan Laporan Terkirim</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Perbaikan Laporan Anda Telah Terkirim</h2>
        <p>Halo, {{ $pengaduan->nama_pelapor }},</p>
        <p>Terima kasih telah mengirimkan perbaikan untuk laporan Anda dengan nomor tiket <strong>{{ $pengaduan->nomor_tiket }}</strong>.</p>
        <p>Laporan Anda kini telah berstatus "Baru" dan akan kembali ditinjau oleh admin kami.</p>
        <hr>
        <p>Hormat kami,<br>Tim Polresta Gorontalo Kota</p>
    </div>
</body>
</html>

===== resources\views\emails\pengaduan-diterima.blade.php =====
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Diterima</title>
</head>

<body style="font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Laporan Anda Telah Diterima</h2>
        <p>Halo, {{ $pengaduan->nama_pelapor }},</p>
        <p>Terima kasih telah membuat laporan. Laporan Anda telah kami terima dan akan segera ditindaklanjuti.</p>
        <p><strong>Nomor Tiket Laporan Anda: {{ $pengaduan->nomor_tiket }}</strong></p>
        <p>Silakan gunakan Nomor Tiket Laporan Anda untuk melacak status laporan Anda.</p>
        <hr>
        <p>Hormat kami,<br>Tim Polresta Gorontalo Kota</p>
    </div>
</body>

</html>

===== resources\views\emails\status-diperbarui.blade.php =====
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Update Status Laporan</title>
</head>

<body style="font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Status Laporan Anda Telah Diperbarui</h2>
        <p>Halo, {{ $pengaduan->nama_pelapor }},</p>
        <p>Ada pembaruan untuk laporan Anda dengan nomor tiket <strong>{{ $pengaduan->nomor_tiket }}</strong>.</p>

        <div style="padding: 15px; background-color: #f2f2f2; border-radius: 5px; margin-top: 15px;">
            <p><strong>Status Baru:</strong> {{ $riwayat->status }}</p>
            @if ($riwayat->catatan)
                <p><strong>Catatan:</strong> {{ $riwayat->catatan }}</p>
            @endif
        </div>

        <p style="margin-top: 20px;">Anda dapat melacak detail laporan Anda kapan saja melalui website kami.</p>
        <hr>
        <p>Hormat kami,<br>Tim Polresta Gorontalo Kota</p>
    </div>
</body>

</html>

===== resources\views\lacak\edit.blade.php =====
<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700">Perbaiki Laporan Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">
                    Silakan perbaiki data laporan Anda berdasarkan catatan di bawah, lalu kirim ulang.
                </p>
            </div>

            <div class="bg-red-100 border-l-4 border-red-500 text-red-800 p-4 rounded-lg mb-8" role="alert">
                <p class="font-bold">Catatan dari Petugas:</p>
                <p class="mt-1 italic">"{{ $pengaduan->catatan_pengembalian }}"</p>
            </div>

            <div class="glass p-8 rounded-2xl">
                <form action="{{ route('laporan.update.handle', $pengaduan->id) }}" method="POST"
                    enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    {{-- [PERBAIKAN] Melengkapi semua field yang dibutuhkan controller --}}
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Nama
                                Lengkap</label>
                            <input type="text" id="nama_pelapor" name="nama_pelapor"
                                value="{{ old('nama_pelapor', $pengaduan->nama_pelapor) }}"
                                class="w-full p-3 rounded-lg border @error('nama_pelapor') border-red-500 @else border-gray-300 @enderror"
                                required>
                            @error('nama_pelapor')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="no_hp_pelapor" class="block mb-2 text-sm font-medium text-gray-700">No.
                                Handphone</label>
                            <input type="tel" id="no_hp_pelapor" name="no_hp_pelapor"
                                value="{{ old('no_hp_pelapor', $pengaduan->no_hp_pelapor) }}"
                                class="w-full p-3 rounded-lg border @error('no_hp_pelapor') border-red-500 @else border-gray-300 @enderror"
                                required>
                            @error('no_hp_pelapor')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" id="nik" name="nik"
                                value="{{ old('nik', $pengaduan->nik) }}"
                                class="w-full p-3 rounded-lg border @error('nik') border-red-500 @else border-gray-300 @enderror"
                                required>
                            @error('nik')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-700">Upload Ulang Foto
                                KTP (Opsional)</label>
                            <input type="file" id="foto_ktp" name="foto_ktp"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('foto_ktp') ring-1 ring-red-500 rounded-lg @enderror">
                            @error('foto_ktp')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tempat
                                Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir"
                                value="{{ old('tempat_lahir', $pengaduan->tempat_lahir) }}"
                                class="w-full p-3 rounded-lg border @error('tempat_lahir') border-red-500 @else border-gray-300 @enderror"
                                required>
                            @error('tempat_lahir')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tanggal
                                Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('Y-m-d') : '') }}"
                                class="w-full p-3 rounded-lg border @error('tanggal_lahir') border-red-500 @else border-gray-300 @enderror"
                                required>
                            @error('tanggal_lahir')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <div class="flex items-center space-x-6 mt-2">
                                <label class="inline-flex items-center"><input type="radio" name="jenis_kelamin"
                                        value="Laki-laki" class="form-radio"
                                        @if (old('jenis_kelamin', $pengaduan->jenis_kelamin) == 'Laki-laki') checked @endif><span
                                        class="ml-2">Laki-laki</span></label>
                                <label class="inline-flex items-center"><input type="radio" name="jenis_kelamin"
                                        value="Perempuan" class="form-radio"
                                        @if (old('jenis_kelamin', $pengaduan->jenis_kelamin) == 'Perempuan') checked @endif><span
                                        class="ml-2">Perempuan</span></label>
                            </div>
                            @error('jenis_kelamin')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="agama" class="block mb-2 text-sm font-medium text-gray-700">Agama</label>
                            <select id="agama" name="agama"
                                class="w-full p-3 rounded-lg border @error('agama') border-red-500 @else border-gray-300 @enderror"
                                required>
                                <option value="Islam" @if (old('agama', $pengaduan->agama) == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen Protestan" @if (old('agama', $pengaduan->agama) == 'Kristen Protestan') selected @endif>
                                    Kristen Protestan</option>
                            </select>
                            @error('agama')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pekerjaan_pelapor"
                                class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan (Opsional)</label>
                            <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor"
                                value="{{ old('pekerjaan_pelapor', $pengaduan->pekerjaan_pelapor) }}"
                                class="w-full p-3 rounded-lg border @error('pekerjaan_pelapor') border-red-500 @else border-gray-300 @enderror">
                            @error('pekerjaan_pelapor')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="alamat_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Alamat</label>
                        <textarea id="alamat_pelapor" name="alamat_pelapor" rows="3"
                            class="w-full p-3 rounded-lg border @error('alamat_pelapor') border-red-500 @else border-gray-300 @enderror">{{ old('alamat_pelapor', $pengaduan->alamat_pelapor) }}</textarea>
                        @error('alamat_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="tujuan_polsek" class="block mb-2 text-sm font-medium text-gray-700">Tujuan
                            Polsek</label>
                        <select id="tujuan_polsek" name="tujuan_polsek"
                            class="w-full p-3 rounded-lg border @error('tujuan_polsek') border-red-500 @else border-gray-300 @enderror"
                            required>
                            <option value="Polres Kota Gorontalo" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polres Kota Gorontalo') selected @endif>
                                Polres Kota Gorontalo</option>
                            <option value="Polsek Kota Utara" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kota Utara') selected @endif>Polsek
                                Kota Utara</option>
                            <option value="Polsek Kota Selatan" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kota Selatan') selected @endif>
                                Polsek Kota Selatan</option>
                            <option value="Polsek Kota Barat" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kota Barat') selected @endif>Polsek
                                Kota Barat</option>
                            <option value="Polsek Kota Timur" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kota Timur') selected @endif>Polsek
                                Kota Timur</option>
                            <option value="Polsek Kota Tengah" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kota Tengah') selected @endif>
                                Polsek Kota Tengah</option>
                            <option value="Polsek Dungingi" @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Dungingi') selected @endif>Polsek
                                Dungingi</option>
                            <option value="Polsek Kawasan Pelabuhan Gorontalo"
                                @if (old('tujuan_polsek', $pengaduan->tujuan_polsek) == 'Polsek Kawasan Pelabuhan Gorontalo') selected @endif>Polsek Kawasan Pelabuhan Gorontalo
                            </option>
                        </select>
                        @error('tujuan_polsek')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi
                            Laporan</label>
                        <textarea id="isi_laporan" name="isi_laporan" rows="5"
                            class="w-full p-3 rounded-lg border @error('isi_laporan') border-red-500 @else border-gray-300 @enderror"
                            required>{{ old('isi_laporan', $pengaduan->isi_laporan) }}</textarea>
                        @error('isi_laporan')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">Lokasi Kejadian</label>
                        <div id="map" class="rounded-lg border border-gray-300"></div>
                        <p class="mt-2 text-sm text-gray-500">Koordinat Terpilih: <span id="koordinat"
                                class="font-semibold">{{ $pengaduan->latitude }}, {{ $pengaduan->longitude }}</span>
                        </p>
                        <input type="hidden" name="latitude" id="latitude"
                            value="{{ old('latitude', $pengaduan->latitude) }}" required>
                        <input type="hidden" name="longitude" id="longitude"
                            value="{{ old('longitude', $pengaduan->longitude) }}" required>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700">
                            Kirim Perbaikan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Ambil koordinat awal dari data pengaduan
                const initialLat = {{ old('latitude', $pengaduan->latitude) }};
                const initialLng = {{ old('longitude', $pengaduan->longitude) }};

                // Inisialisasi peta dan pusatkan ke koordinat awal
                const map = L.map('map').setView([initialLat, initialLng], 15);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'Â© OpenStreetMap'
                }).addTo(map);

                let marker;

                // Fungsi untuk mengupdate input hidden dan teks koordinat
                function updateCoordinates(latlng) {
                    document.getElementById('latitude').value = latlng.lat;
                    document.getElementById('longitude').value = latlng.lng;
                    document.getElementById('koordinat').textContent =
                        `${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}`;
                }

                // Fungsi untuk menempatkan atau memindahkan marker
                function placeMarker(latlng) {
                    if (marker) {
                        marker.setLatLng(latlng);
                    } else {
                        marker = L.marker(latlng, {
                            draggable: true
                        }).addTo(map);
                        // Tambahkan event listener saat marker selesai digeser
                        marker.on('dragend', (event) => updateCoordinates(event.target.getLatLng()));
                    }
                    updateCoordinates(latlng);
                    map.panTo(latlng); // Geser peta ke lokasi marker
                }

                // Langsung tempatkan marker di lokasi awal saat halaman dimuat
                placeMarker({
                    lat: initialLat,
                    lng: initialLng
                });

                // Tambahkan event listener untuk klik di peta
                map.on('click', (e) => placeMarker(e.latlng));
            });
        </script>
    @endpush
</x-guest-layout>

===== resources\views\lacak\verifikasi.blade.php =====
<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-blue-700">Verifikasi Identitas Anda</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                    Untuk keamanan, silakan masukkan kembali NIK yang Anda gunakan saat melapor untuk melanjutkan proses
                    perbaikan laporan.
                </p>
            </div>

            <div class="glass p-8 rounded-2xl">
                {{-- resources/views/lacak/verifikasi.blade.php --}}

                <form action="{{ route('laporan.verifikasi.handle', $pengaduan->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nomor_tiket" class="block mb-2 text-sm font-medium text-gray-700">Nomor Tiket</label>
                        <input type="text" id="nomor_tiket" name="nomor_tiket"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Ketik nomor tiket Anda di sini..." required>

                        {{-- Menambahkan pesan error untuk konsistensi --}}
                        @error('nomor_tiket')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Verifikasi & Lanjutkan
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- [PERBAIKAN] Menambahkan skrip SweetAlert untuk session 'error' --}}
    @if (session('error'))
        <script>
            // Pastikan Anda sudah memuat library SweetAlert di layout utama (guest.blade.php)
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</x-guest-layout>

===== resources\views\layouts\app.blade.php =====
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">

    <style>[x-cloak] { display: none !important; }</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body x-data="{ sidebarOpen: false }" class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <div
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 z-30 bg-white border-r border-gray-200 transform transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:z-auto"
        >
            @include('layouts.navigation')
        </div>

        <!-- Overlay -->
        <div
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
            x-cloak
            class="fixed inset-0 bg-black bg-opacity-25 z-20 md:hidden"
        ></div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Mobile topbar -->
            <header class="bg-white border-b px-4 py-3 flex items-center justify-between md:hidden relative">
                <!-- Tombol hamburger -->
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            
                <!-- Judul di tengah -->
                <div class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                    {{ config('app.name', 'MY APP') }}
                </div>
            </header>
            

            <!-- Optional header (desktop only) -->
            @isset($header)
                <header class="bg-white shadow hidden md:block">
                    <div class="px-6 py-7">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {{-- [TAMBAHKAN BLOK INI] --}}
    <!-- Memuat library SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Skrip untuk menampilkan notifikasi dari session -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 3000, // Notifikasi akan hilang setelah 3 detik
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    {{-- [AKHIR DARI BLOK TAMBAHAN] --}}
</body>

</html>

===== resources\views\layouts\guest.blade.php =====
<!DOCTYPE html>
<html lang="id" x-data="{ menuOpen: false }" class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-900 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sistem Pengaduan Masyarakat Polda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PoldaCare - Pengaduan Masyarakat</title>

    <!-- Tailwind CSS & AlpineJS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Leaflet CSS & JS for Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Leaflet MarkerCluster CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />
    <script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>

    <!-- Custom Styles -->
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        #map {
            height: 400px;
            z-index: 10;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        #legend {
            padding: 10px;
            line-height: 18px;
            color: #555;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        #legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
            border-radius: 50%;
        }
    </style>
    @stack('styles')
</head>

<body class="flex flex-col min-h-screen font-sans antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 glass">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-6">
            <a href="/" class="text-3xl font-bold text-blue-700 tracking-tight">Polresta Gorontalo Kota</a>
            <nav class="hidden lg:flex space-x-8 items-center">
                <a href="{{ route('lacak.aduan') }}"
               class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Lacak Aduan<span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="{{ route('peta.rawan') }}"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Peta Kerawanan<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                <a href="{{ route('landing') }}#lapor"
                    class="text-gray-700 font-medium hover:text-blue-600 transition relative group">Lapor<span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span></a>
                
                        <a href="{{ route('page.profil') }}" class="text-gray-700 font-medium hover:text-blue-600">Profil</a>
                        <a href="{{ route('page.fitur') }}" class="text-gray-700 font-medium hover:text-blue-600">Fitur</a>
                        <a href="{{ route('page.kontak') }}" class="text-gray-700 font-medium hover:text-blue-600">Kontak</a>

                <a href="{{ route('login') }}"
                    class="px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-blue-600/50 transition transform hover:scale-105">Masuk
                    Petugas</a>
            </nav>
            <button @click="menuOpen = !menuOpen" class="lg:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div x-show="menuOpen" @click.away="menuOpen = false" class="lg:hidden glass p-6 space-y-4">
            <a href="#lapor" class="block text-gray-700 font-medium hover:text-blue-600 transition">Lapor</a>
            <a href="#tentang" class="block text-gray-700 font-medium hover:text-blue-600 transition">Tentang</a>
            <a href="#fitur" class="block text-gray-700 font-medium hover:text-blue-600 transition">Fitur</a>
            <a href="#kontak" class="block text-gray-700 font-medium hover:text-blue-600 transition">Kontak</a>
            <a href="{{ route('login') }}"
                class="block px-6 py-2.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 transition transform hover:scale-105 text-center">Masuk
                Petugas</a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="p-6 text-center text-gray-600 bg-gray-100 glass">
        Â© {{ date('Y') }} Polresta Gorontalo Kota. Semua hak dilindungi.
    </footer>

    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 3000, // Notifikasi akan hilang setelah 3 detik
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

</body>

</html>

===== resources\views\layouts\navigation.blade.php =====
<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        {{-- Link logo dinamis sesuai peran (tidak berubah) --}}
        @if (Auth::check())
            @if (Auth::user()->role->value === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    Polresta Gorontalo Kota
                </a>
            @else
                <a href="{{ route('reskrim.dashboard') }}" class="text-2xl font-bold text-gray-800">
                    Polresta Gorontalo Kota
                </a>
            @endif
        @endif
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1">
        @if (Auth::check())
            {{-- ====================================================== --}}
            {{-- [PERUBAHAN UTAMA] Tampilan Navigasi untuk Admin         --}}
            {{-- ====================================================== --}}
            @if (Auth::user()->role->value === 'admin')
                <!-- Link ke Dashboard Statistik -->
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>{{ __('Dashboard') }}</span>
                </x-nav-link>

                <!-- Judul "Fitur" -->
                <h3 class="px-3 pt-4 pb-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    Fitur
                </h3>

                <!-- Link ke Manajemen Pengaduan -->
                <x-nav-link :href="route('admin.pengaduan.list')" :active="request()->routeIs('admin.pengaduan.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>{{ __('Laporan Pengaduan') }}</span>
                </x-nav-link>

                <!-- Link ke Manajemen STPL -->
                <x-nav-link :href="route('admin.stpl.index')" :active="request()->routeIs('admin.stpl.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span>{{ __('Manajemen STPL') }}</span>
                </x-nav-link>

                {{-- Navigasi untuk Reskrim (tidak berubah) --}}
            @elseif (Auth::user()->role->value === 'reskrim')
                <!-- Link ke Dashboard Reskrim -->
                <x-nav-link :href="route('reskrim.dashboard')" :active="request()->routeIs('reskrim.dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>{{ __('Dashboard') }}</span>
                </x-nav-link>

                <!-- Link ke Daftar Tugas -->
                <x-nav-link :href="route('reskrim.tugas.list')" :active="request()->routeIs('reskrim.tugas.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span>{{ __('Tugas Saya') }}</span>
                </x-nav-link>
            @endif
        @endif
    </nav>

    {{-- Bagian Profil & Logout (tidak berubah) --}}
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>

===== resources\views\pages\fitur.blade.php =====
<x-guest-layout>
    <section id="fitur" class="py-20 px-10 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-700">Fitur Unggulan Kami</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl">
                    <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aduan Mudah</h4>
                    <p class="text-gray-600 leading-relaxed">Laporkan masalah secara langsung melalui platform kami tanpa perlu mengunjungi kantor.</p>
                </div>
                <div class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl">
                    <h4 class="font-bold text-blue-700 mb-3 text-2xl">Transparan</h4>
                    <p class="text-gray-600 leading-relaxed">Pantau perkembangan laporan Anda secara real-time dengan laporan yang jelas dan lengkap.</p>
                </div>
                <div class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl">
                    <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aman</h4>
                    <p class="text-gray-600 leading-relaxed">Identitas dan data pelapor dijamin kerahasiaannya dengan sistem keamanan terkini.</p>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

===== resources\views\pages\kontak.blade.php =====
<x-guest-layout>
    {{-- Latar belakang dengan gradien halus --}}
    <div class="bg-gradient-to-b from-blue-50 to-white">
        <section class="py-20 md:py-28 px-4">
            <div class="max-w-5xl mx-auto">
                
                {{-- Judul Halaman --}}
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-slate-800 tracking-tight">
                        Hubungi Kami
                    </h2>
                    <p class="mt-4 text-lg text-slate-600 max-w-3xl mx-auto">
                        Temukan alamat Polres dan Polsek terdekat di wilayah Kota Gorontalo.
                    </p>
                </div>

                {{-- [PERUBAHAN UTAMA] Grid untuk menampilkan alamat Polsek --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    @php
                        // Menyiapkan data alamat dalam array agar mudah dikelola
                        $alamatPolsek = [
                            [
                                'nama' => 'Polres Gorontalo Kota',
                                'alamat' => 'Jl. Pangeran Kalengkongan, Tenda, Kec. Hulonthalangi, Kota Gorontalo, Gorontalo 96133'
                            ],
                            [
                                'nama' => 'Polsek Kota Utara',
                                'alamat' => 'Jl. Rusli Datau, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo 96128'
                            ],
                            [
                                'nama' => 'Polsek Kota Tengah',
                                'alamat' => 'Jl. Madura, Liluwo, Kec. Kota Tengah, Pulubala, Kota Gorontalo, Gorontalo 96138'
                            ],
                            [
                                'nama' => 'Polsek Kota Timur',
                                'alamat' => 'Jl. Taman Sari, Moodu, Kec. Kota Timur, Kota Gorontalo, Gorontalo 96135'
                            ],
                            [
                                'nama' => 'Polsek Kota Selatan',
                                'alamat' => 'Jl. Gn Tilongkabila, Biawu, Kec. Kota Selatan, Kota Gorontalo, Gorontalo 96133'
                            ],
                            [
                                'nama' => 'Polsek Kota Barat',
                                'alamat' => 'Jl. Loji, Pilolodaa, Kec. Kota Barat, Kota Gorontalo, Gorontalo 96181'
                            ],
                            [
                                'nama' => 'Polsek Dungingi',
                                'alamat' => 'Jl. KH Agus Salim, Huangobotu, Kec. Dungingi, Kota Gorontalo, Gorontalo, 96136'
                            ],
                            [
                                'nama' => 'Polsek Kawasan Pelabuhan Gorontalo',
                                'alamat' => 'Jl. R. Atje Slamet, Leato Sel., Kec. Dumbo Raya, Kota Gorontalo, Gorontalo 96116'
                            ],
                        ];
                    @endphp

                    @foreach ($alamatPolsek as $polsek)
                        <div class="bg-white rounded-xl shadow-lg p-6 flex space-x-6 transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1">
                            {{-- Ikon --}}
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-lg w-14 h-14 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                </svg>
                            </div>
                            {{-- Detail Alamat --}}
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">{{ $polsek['nama'] }}</h3>
                                    <p class="mt-1 text-gray-600 leading-relaxed">{{ $polsek['alamat'] }}</p>
                                </div>
                                {{-- [PERBAIKAN] Link Google Maps sekarang mencari berdasarkan nama --}}
                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($polsek['nama']) }}" target="_blank" class="mt-3 text-sm font-semibold text-blue-600 hover:text-blue-800 inline-flex items-center">
                                    Lihat di Peta
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    </div>
</x-guest-layout>

===== resources\views\pages\profil.blade.php =====
<x-guest-layout>
    {{-- Latar belakang bersih untuk kesan minimalis --}}
    <div class.="bg-white">
        <section class="py-20 md:py-28 px-4">
            <div class="max-w-4xl mx-auto">
                
                {{-- Judul Halaman --}}
                {{-- Ganti div text-center Anda dengan blok ini --}}
<div class="text-center mb-20 flex items-center justify-center gap-4 md:gap-8">
    
    {{-- Logo Kiri --}}
    <div class="flex-shrink-0">
        {{-- Ganti dengan URL logo Anda jika berbeda --}}
        <img src="{{ asset('images/polreslogocowo.png') }}" alt="Logo Kiri" 
             class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
    </div>

    {{-- Teks Judul --}}
    <div>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 tracking-tight">
            Profil Polres Gorontalo Kota
        </h2>
        <p class="mt-4 text-lg text-gray-600">
            Visi dan Misi kami dalam melayani masyarakat.
        </p>
    </div>

    {{-- Logo Kanan --}}
    <div class="flex-shrink-0">
        {{-- Ganti dengan URL logo Anda jika berbeda --}}
        <img src="{{ asset('images/polreslogocewe.png') }}" alt="Logo Kanan" 
             class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
    </div>

</div>

                <div class="space-y-16">
                    
                    <!-- Bagian Visi -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-800 border-b-2 border-blue-600 pb-4 mb-6">Visi</h3>
                        <blockquote class="text-2xl font-light text-gray-700 leading-relaxed">
                            â€œTerwujudnya Polres Gorontalo Kota yang professional, modern dan terpercaya.â€
                        </blockquote>
                    </div>

                    <!-- Bagian Misi -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-800 border-b-2 border-blue-600 pb-4 mb-8">Misi</h3>
                        <ol class="space-y-6 text-lg text-gray-700">
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">1</span>
                                <span>Mewujudkan pelayanan Publik secara prima terhadap masyarakat serta didukung oleh sumber daya manusia dan prasarana pendukung.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">2</span>
                                <span>Melakukan penegakan hukum dengan tidak diskriminatif, menjunjung tinggi HAM, anti KKN dan anti kekerasan.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">3</span>
                                <span>Memberikan dukungan kepada masyarakat berupa bimbingan, penyuluhan dan pengembangan potensi masyarakat untuk ikut serta berperan aktif dalam memelihara keamanan dan ketertiban dilingkungan masyarakat dalam rangka meningkatkan kesadaran hukum.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">4</span>
                                <span>Meningkatkan peran Bhabinkamtibmas di setiap kelurahan dalam mengimplementasikan strategi Polmas.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">5</span>
                                <span>Menjaga keamanan, keselamatan, ketertiban dan kelancaran lalu lintas untuk menjamin keselamatan dan kelancaran arus orang dan barang.</span>
                            </li>
                            <li class="flex">
                                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold flex-shrink-0 mr-4">6</span>
                                <span>Menggalakkan seluruh anggota Polres Gorontalo Kota guna memberikan deteksi dini terhadap ancaman yang dapat menimbulkan kerawanan kamtibmas di wilayah Polres Gorontalo Kota.</span>
                            </li>
                        </ol>
                    </div>

                </div>

            </div>
        </section>
    </div>
</x-guest-layout>

===== resources\views\partials\report-form.blade.php =====
<!-- Section Lapor -->
<section id="lapor" class="py-20 px-10 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-blue-700 animate-fadeInUp">Buat Laporan Anda</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">Isi formulir di bawah ini dengan lengkap dan benar.
                Setiap laporan dari Anda sangat berarti bagi kami.</p>
        </div>

        {{-- Notifikasi Sukses dengan SweetAlert --}}
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            </script>
        @endif

        <div class="glass p-8 rounded-2xl">
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                {{-- Ganti seluruh isi dari <div class="grid md:grid-cols-2 gap-6"> --}}
                {{-- Ganti seluruh isi dari <div class="grid md:grid-cols-2 gap-6"> --}}
                <div class="grid md:grid-cols-2 gap-6">
                    {{-- Nama Lengkap --}}
                    <div>
                        <label for="nama_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Nama
                            Lengkap</label>
                        <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}"
                            class="w-full p-3 rounded-lg border @error('nama_pelapor') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('nama_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- No. Handphone --}}
                    <div>
                        <label for="no_hp_pelapor" class="block mb-2 text-sm font-medium text-gray-700">No.
                            Handphone</label>
                        <input type="tel" id="no_hp_pelapor" name="no_hp_pelapor" value="{{ old('no_hp_pelapor') }}"
                            class="w-full p-3 rounded-lg border @error('no_hp_pelapor') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('no_hp_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- NIK --}}
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-700">NIK</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik') }}"
                            class="w-full p-3 rounded-lg border @error('nik') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('nik')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Foto KTP --}}
                    <div>
                        <label for="foto_ktp" class="block mb-2 text-sm font-medium text-gray-700">Upload Foto
                            KTP</label>
                        <input type="file" id="foto_ktp" name="foto_ktp"
                            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('foto_ktp') ring-1 ring-red-500 rounded-lg @enderror"
                            required>
                        @error('foto_ktp')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="bukti" class="block mb-2 text-sm font-medium text-gray-700">Upload Bukti (Bisa lebih dari satu)</label>
                        <input type="file" id="bukti" name="bukti[]" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" multiple>
                    </div>

                    <div>
                        <label for="email_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email_pelapor" name="email_pelapor" value="{{ old('email_pelapor') }}"
                            class="w-full p-3 rounded-lg border @error('email_pelapor') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('email_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tempat Lahir --}}
                    <div>
                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tempat
                            Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                            class="w-full p-3 rounded-lg border @error('tempat_lahir') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('tempat_lahir')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tanggal Lahir --}}
                    <div>
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-700">Tanggal
                            Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir') }}"
                            class="w-full p-3 rounded-lg border @error('tanggal_lahir') border-red-500 @else border-gray-300 @enderror"
                            required>
                        @error('tanggal_lahir')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="md:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <div class="flex items-center space-x-6 mt-2">
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-radio"
                                    @if (old('jenis_kelamin') == 'Laki-laki') checked @endif>
                                <span class="ml-2">Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-radio"
                                    @if (old('jenis_kelamin') == 'Perempuan') checked @endif>
                                <span class="ml-2">Perempuan</span>
                            </label>
                        </div>
                        @error('jenis_kelamin')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Agama --}}
                    <div>
                        <label for="agama" class="block mb-2 text-sm font-medium text-gray-700">Agama</label>
                        <select id="agama" name="agama"
                            class="w-full p-3 rounded-lg border @error('agama') border-red-500 @else border-gray-300 @enderror"
                            required>
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam" @if (old('agama') == 'Islam') selected @endif>Islam</option>
                            <option value="Kristen Protestan" @if (old('agama') == 'Kristen Protestan') selected @endif>Kristen
                                Protestan</option>
                            <option value="Kristen Katolik" @if (old('agama') == 'Kristen Katolik') selected @endif>Kristen
                                Katolik</option>
                            <option value="Hindu" @if (old('agama') == 'Hindu') selected @endif>Hindu</option>
                            <option value="Buddha" @if (old('agama') == 'Buddha') selected @endif>Buddha</option>
                            <option value="Khonghucu" @if (old('agama') == 'Khonghucu') selected @endif>Khonghucu
                            </option>
                        </select>
                        @error('agama')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- [PENAMBAHAN] Umur (Opsional) --}}
                    <div>
                        <label for="umur_pelapor" class="block mb-2 text-sm font-medium text-gray-700">Umur</label>
                        <input type="number" id="umur_pelapor" name="umur_pelapor" value="{{ old('umur_pelapor') }}"
                            class="w-full p-3 rounded-lg border @error('umur_pelapor') border-red-500 @else border-gray-300 @enderror">
                        @error('umur_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Pekerjaan (Opsional) --}}
                    <div class="md:col-span-2">
                        <label for="pekerjaan_pelapor"
                            class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan</label>
                        <input type="text" id="pekerjaan_pelapor" name="pekerjaan_pelapor"
                            value="{{ old('pekerjaan_pelapor') }}"
                            class="w-full p-3 rounded-lg border @error('pekerjaan_pelapor') border-red-500 @else border-gray-300 @enderror">
                        @error('pekerjaan_pelapor')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Alamat --}}
                <div>
                    <div class="flex justify-between items-center mb-2"><label for="alamat_pelapor"
                            class="text-sm font-medium text-gray-700">Alamat Kejadian</label><button type="button"
                            id="get-location-btn"
                            class="flex items-center text-xs text-blue-600 font-semibold hover:text-blue-800 transition"><svg
                                class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>Gunakan Lokasi Saya</button></div>
                    <textarea id="alamat_pelapor" name="alamat_pelapor" rows="3"
                        class="w-full p-3 bg-white/50 rounded-lg border @error('alamat_pelapor') border-red-500 @else border-gray-300 @enderror focus:ring-blue-500 focus:border-blue-500 transition"
                        placeholder="Ketik alamat atau gunakan lokasi saat ini...">{{ old('alamat_pelapor') }}</textarea>
                    <p id="location-status" class="text-xs text-gray-500 mt-1 h-4"></p>
                    @error('alamat_pelapor')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Tujuan Polsek --}}
                <div>
                    <label for="tujuan_polsek" class="block mb-2 text-sm font-medium text-gray-700">Tujuan
                        Polsek</label>
                    <select id="tujuan_polsek" name="tujuan_polsek"
                        class="w-full p-3 bg-white/50 rounded-lg border @error('tujuan_polsek') border-red-500 @else border-gray-300 @enderror focus:ring-blue-500 focus:border-blue-500 transition"
                        required>
                        <option value="" disabled selected>Pilih Tujuan Laporan</option>
                        <option value="Polres Kota Gorontalo" @if (old('tujuan_polsek') == 'Polres Kota Gorontalo') selected @endif>Polres
                            Kota Gorontalo</option>
                        <option value="Polsek Kota Utara" @if (old('tujuan_polsek') == 'Polsek Kota Utara') selected @endif>Polsek
                            Kota Utara</option>
                        <option value="Polsek Kota Selatan" @if (old('tujuan_polsek') == 'Polsek Kota Selatan') selected @endif>Polsek
                            Kota Selatan</option>
                        <option value="Polsek Kota Barat" @if (old('tujuan_polsek') == 'Polsek Kota Barat') selected @endif>Polsek
                            Kota Barat</option>
                        <option value="Polsek Kota Timur" @if (old('tujuan_polsek') == 'Polsek Kota Timur') selected @endif>Polsek
                            Kota Timur</option>
                        <option value="Polsek Kota Tengah" @if (old('tujuan_polsek') == 'Polsek Kota Tengah') selected @endif>Polsek
                            Kota Tengah</option>
                        <option value="Polsek Dungingi" @if (old('tujuan_polsek') == 'Polsek Dungingi') selected @endif>Polsek
                            Dungingi</option>
                        <option value="Polsek Kawasan Pelabuhan Gorontalo"
                            @if (old('tujuan_polsek') == 'Polsek Kawasan Pelabuhan Gorontalo') selected @endif>Polsek Kawasan Pelabuhan Gorontalo
                        </option>
                    </select>
                    @error('tujuan_polsek')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Isi Laporan --}}
                <div>
                    <label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi Laporan</label>
                    <textarea id="isi_laporan" name="isi_laporan" rows="5"
                        class="w-full p-3 bg-white/50 rounded-lg border @error('isi_laporan') border-red-500 @else border-gray-300 @enderror focus:ring-blue-500 focus:border-blue-500 transition"
                        required>{{ old('isi_laporan') }}</textarea>
                    @error('isi_laporan')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Peta Lokasi --}}
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Tandai Lokasi Kejadian di Peta</label>
                    <div id="map" class="rounded-lg border border-gray-300"
                        data-laporan="{{ htmlspecialchars(json_encode($laporan ?? [])) }}"></div>
                    <p class="mt-2 text-sm text-gray-500">Koordinat Terpilih: <span id="koordinat"
                            class="font-semibold">Belum dipilih</span></p>
                    <input type="hidden" name="latitude" id="latitude" required><input type="hidden"
                        name="longitude" id="longitude" required>
                    @error('latitude')
                        <p class="text-sm text-red-600 mt-2">Lokasi di peta wajib ditandai.</p>
                    @enderror
                </div>

                <div><button type="submit"
                        class="w-full px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-700 hover:scale-105">Kirim
                        Laporan</button></div>
            </form>
        </div>
    </div>
</section>

===== resources\views\profile\partials\delete-user-form.blade.php =====
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

===== resources\views\profile\partials\update-password-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\partials\update-profile-information-form.blade.php =====
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

===== resources\views\profile\edit.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\reskrim\tugas\index.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tugas Laporan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- [PENAMBAHAN] Form Filter Otomatis -->
                    <form id="filter-form" method="GET" action="{{ route('reskrim.tugas.list') }}">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <div>
                                <label for="search" class="text-sm font-medium text-gray-700">Cari Pelapor/NIK</label>
                                <input type="text" name="search" id="search" placeholder="Ketik untuk mencari..."
                                    value="{{ request('search') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Semua Status</option>
                                    <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>
                                        Diproses</option>
                                    <option value="Diteruskan ke Penyidik"
                                        {{ request('status') == 'Diteruskan ke Penyidik' ? 'selected' : '' }}>Diteruskan
                                        ke Penyidik</option>
                                </select>
                            </div>
                            <div>
                                <label for="start_date" class="text-sm font-medium text-gray-700">Dari Tanggal</label>
                                <input type="date" name="start_date" id="start_date"
                                    value="{{ request('start_date') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="end_date" class="text-sm font-medium text-gray-700">Sampai Tanggal</label>
                                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('reskrim.tugas.list') }}"
                                class="text-sm text-gray-600 hover:text-gray-900">Reset Filter</a>
                        </div>
                    </form>
                    <!-- Akhir Form Filter -->

                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status
                                    </th>
                                    <th class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($pengaduans as $pengaduan)
                                    <tr>
                                        <td class="px-6 py-4">#{{ $pengaduan->id }}</td>
                                        <td class="px-6 py-4">{{ $pengaduan->nama_pelapor }}</td>
                                        <td class="px-6 py-4">{{ $pengaduan->created_at->format('d M Y') }}</td>
                                        <td class="px-6 py-4">
                                            @php
                                                $statusClass = '';
                                                if ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                                    $statusClass = 'bg-indigo-100 text-indigo-800';
                                                } elseif ($pengaduan->status == 'Diproses') {
                                                    $statusClass = 'bg-purple-100 text-purple-800';
                                                } elseif ($pengaduan->status == 'Selesai') {
                                                    $statusClass = 'bg-green-100 text-green-800';
                                                } // [PERUBAHAN]
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">{{ $pengaduan->status }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('reskrim.tugas.show', $pengaduan) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data
                                            yang cocok dengan filter Anda.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $pengaduans->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterForm = document.getElementById('filter-form');
                const inputs = filterForm.querySelectorAll('input, select');
                let timer;

                inputs.forEach(input => {
                    const eventType = input.type === 'text' ? 'input' : 'change';
                    input.addEventListener(eventType, function() {
                        clearTimeout(timer);
                        timer = setTimeout(() => {
                            filterForm.submit();
                        }, 500);
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\reskrim\tugas\show.blade.php =====
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 300px;
            z-index: 10;
        }
    </style>
@endpush
@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Tugas Laporan #') . $pengaduan->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Kolom Kiri: Detail Laporan & Dokumen Pendukung --}}
                <div class="md:col-span-2 space-y-6">
                    {{-- Kartu Detail Laporan (tidak berubah) --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 space-y-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Data Pelapor</h3>
                                <dl class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-2 text-sm">
                                    <dt class="font-medium text-gray-500">Nama</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->nama_pelapor }}</dd>
                                    <dt class="font-medium text-gray-500">No. HP</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->no_hp_pelapor }}</dd>
                                    <dt class="text-sm font-medium text-gray-500">Email Pelapor</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $pengaduan->email_pelapor }}</dd>
                                    <dt class="font-medium text-gray-500">Umur</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->umur_pelapor ?? '-' }}</dd>
                                    <dt class="font-medium text-gray-500">Pekerjaan</dt>
                                    <dd class="text-gray-900">{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</dd>
                                    <dt class="font-medium text-gray-500 col-span-2">Alamat</dt>
                                    <dd class="text-gray-900 col-span-2">{{ $pengaduan->alamat_pelapor ?? '-' }}</dd>
                                </dl>
                            </div>
                            <hr>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Isi Laporan</h3>
                                <p class="mt-2 text-sm text-gray-700 leading-relaxed">{{ $pengaduan->isi_laporan }}</p>
                            </div>
                            <hr>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Lokasi Kejadian</h3>
                                <div id="map" class="mt-2 rounded-lg"></div>
                            </div>
                        </div>
                    </div>

                    {{-- [PENAMBAHAN] Kartu Dokumen Pendukung --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Dokumen Pendukung</h3>

                            {{-- Daftar Dokumen yang Sudah Di-upload --}}
                            <div class="space-y-3 mb-6">
                                @forelse ($pengaduan->suratPernyataans as $surat)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-md border">
                                        <div>
                                            <p class="font-semibold text-gray-700">{{ $surat->judul }}</p>
                                            <p class="text-xs text-gray-500">Diunggah oleh {{ $surat->uploader->name }}
                                                pada {{ $surat->created_at->format('d M Y') }}</p>
                                        </div>
                                        <a href="{{ route('reskrim.surat.download', $surat->id) }}"
                                            class="text-sm text-indigo-600 hover:text-indigo-900 font-semibold">Download</a>
                                    </div>
                                @empty
                                    <div class="text-center text-sm text-gray-500 py-4">Belum ada dokumen yang diunggah.
                                    </div>
                                @endforelse
                            </div>

                            <hr class="my-6">

                            {{-- Form Upload Dokumen Baru --}}
                            <h4 class="text-md font-semibold text-gray-700 mb-2">Upload Dokumen Baru</h4>
                            <form action="{{ route('reskrim.tugas.surat.store', $pengaduan->id) }}" method="POST"
                                enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="judul"
                                        class="block text-sm font-medium text-gray-700">Judul/Deskripsi Dokumen</label>
                                    <input type="text" name="judul" id="judul"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    @error('judul')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="file_pernyataan" class="block text-sm font-medium text-gray-700">Pilih
                                        File (PDF, JPG, PNG)</label>
                                    <input type="file" name="file_pernyataan" id="file_pernyataan"
                                        class="mt-1 block w-full text-sm" required>
                                    @error('file_pernyataan')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition">Upload
                                        Dokumen</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Status & Aksi (tidak berubah) --}}
                <div class="space-y-6">
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Status & Tindak Lanjut</h3>
                        <p class="text-sm text-gray-500 mb-1">Status Saat Ini:</p>
                        @php
                            $statusClass = '';
                            if ($pengaduan->status == 'Diteruskan ke Reskrim') {
                                $statusClass = 'bg-indigo-100 text-indigo-800';
                            } elseif ($pengaduan->status == 'Diproses') {
                                $statusClass = 'bg-purple-100 text-purple-800';
                            } elseif ($pengaduan->status == 'Diteruskan ke Penyidik') {
                                $statusClass = 'bg-teal-100 text-teal-800';
                            }
                        @endphp
                        <span
                            class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $statusClass }}">
                            {{ $pengaduan->status }}
                        </span>
                    </div>
                    <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">Foto KTP Pelapor</h3>
                        @if ($pengaduan->foto_ktp)
                            <a href="{{ asset('storage/' . $pengaduan->foto_ktp) }}" target="_blank">
                                <img src="{{ asset('storage/' . $pengaduan->foto_ktp) }}" alt="Foto KTP"
                                    class="w-full h-auto rounded-lg border hover:opacity-90 transition">
                            </a>
                        @else
                            <p class="text-gray-500 text-sm">Tidak ada foto KTP yang diunggah.</p>
                        @endif
                    </div>
                    @if ($pengaduan->bukti->isNotEmpty())
                        <div class="md:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Bukti Tambahan</dt>
                            <dd class="mt-2 text-sm text-gray-900">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    @foreach ($pengaduan->bukti as $item)
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                {{-- Icon Lampiran --}}
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.497a1.5 1.5 0 012.121-2.121l-1.414-1.414a1 1 0 111.414-1.414l1.414 1.414a3.5 3.5 0 11-4.95-4.95l.497-.497h.001l7-7a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span
                                                    class="ml-2 flex-1 w-0 truncate">{{ basename($item->file_path) }}</span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                                    class="font-medium text-blue-600 hover:text-blue-500">Lihat</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                    @endif

                    @if ($pengaduan->status !== 'Selesai')
                        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Update Status Proses</h3>
                            <form action="{{ route('reskrim.tugas.updateStatus', $pengaduan) }}" method="POST">
                                @csrf
                                <label for="status" class="text-sm font-medium text-gray-700">Ubah Status
                                    Menjadi</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    {{-- [PERUBAHAN] Mengubah opsi kembali ke 'Selesai' --}}
                                    <option value="Diproses" @if ($pengaduan->status == 'Diproses') selected @endif>Diproses
                                    </option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                                <button type="submit"
                                    class="mt-4 w-full bg-purple-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-600">Update
                                    Status</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const lat = {{ $pengaduan->latitude ?? 'null' }};
                const lng = {{ $pengaduan->longitude ?? 'null' }};

                if (lat && lng) {
                    const map = L.map('map').setView([lat, lng], 15);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Â© OpenStreetMap contributors'
                    }).addTo(map);
                    L.marker([lat, lng]).addTo(map).bindPopup('Lokasi kejadian yang dilaporkan.');
                } else {
                    document.getElementById('map').innerHTML =
                        '<div class="flex items-center justify-center h-full bg-gray-100 text-gray-500">Lokasi tidak ditandai oleh pelapor.</div>';
                }
            });
        </script>
    @endpush
</x-app-layout>

===== resources\views\reskrim\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Reskrim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Kartu Statistik (tidak berubah) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('reskrim.tugas.list') }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Tugas</p><p class="mt-1 text-3xl font-bold text-gray-900">{{ $totalTugas ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg></div></div></a>
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Diproses']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Sedang Diproses</p><p class="mt-1 text-3xl font-bold text-purple-600">{{ $tugasDiproses ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
                <a href="{{ route('reskrim.tugas.list', ['status' => 'Selesai']) }}" class="block p-6 bg-white rounded-lg shadow-sm transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1"><div class="flex justify-between items-start"><div><p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Tugas Selesai</p><p class="mt-1 text-3xl font-bold text-green-600">{{ $tugasSelesai ?? 0 }}</p></div><div class="p-3 bg-gray-100 rounded-lg"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div></div></a>
            </div>

            <!-- [PERUBAHAN] Grid untuk dua grafik analitik -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Kolom Kiri: Grafik Tren Kinerja -->
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Analitik Kinerja Tugas</h3>
                            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                                <a href="{{ route('reskrim.dashboard', ['periode' => '7hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '7hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">7 Hari</a>
                                <a href="{{ route('reskrim.dashboard', ['periode' => '30hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '30hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">30 Hari</a>
                                <a href="{{ route('reskrim.dashboard', ['periode' => '90hari']) }}" class="px-3 py-1 text-sm font-medium rounded-md transition {{ $periode == '90hari' ? 'bg-white shadow text-blue-600' : 'text-gray-500 hover:text-gray-800' }}">90 Hari</a>
                            </div>
                        </div>
                        <div>
                            <div id="lineChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Grafik Komposisi Status -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold mb-4 text-center">Komposisi Tugas</h3>
                        <div>
                            <div id="donutChart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Skrip untuk Grafik Garis (Line Chart)
            var lineChartOptions = {
                series: [{
                    name: "Tugas Diterima",
                    data: {!! json_encode($lineChartData['diterima']) !!}
                }, {
                    name: "Tugas Diselesaikan",
                    data: {!! json_encode($lineChartData['selesai']) !!}
                }],
                chart: { type: 'area', height: 350, toolbar: { show: false }, zoom: { enabled: false } },
                colors: ['#4f46e5', '#10b981'], // Indigo dan Hijau
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 2 },
                xaxis: { categories: {!! json_encode($lineChartData['labels']) !!} },
                yaxis: { min: 0, tickAmount: 5, labels: { formatter: (val) => val.toFixed(0) } },
                tooltip: { x: { format: 'dd MMM' }, y: { formatter: (val) => val + " laporan" } },
                legend: { position: 'top' },
                fill: { type: 'gradient', gradient: { opacityFrom: 0.6, opacityTo: 0.1 } },
            };
            var lineChart = new ApexCharts(document.querySelector("#lineChart"), lineChartOptions);
            lineChart.render();

            // Skrip untuk Grafik Lingkaran (Donut Chart)
            var donutChartOptions = {
                series: {!! json_encode($donutChartData['data']) !!},
                chart: { type: 'donut', height: 350 },
                labels: {!! json_encode($donutChartData['labels']) !!},
                colors: ['#8b5cf6', '#10b981'], // Ungu dan Hijau
                legend: { position: 'bottom' },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: { width: 200 },
                        legend: { position: 'bottom' }
                    }
                }]
            };
            var donutChart = new ApexCharts(document.querySelector("#donutChart"), donutChartOptions);
            donutChart.render();
        });
    </script>
    @endpush
</x-app-layout>

===== resources\views\dashboard.blade.php =====
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

===== resources\views\lacak.blade.php =====
{{-- File: resources/views/lacak.blade.php --}}

<x-guest-layout>
    <section class="py-20 px-10 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 flex items-center justify-center gap-4 md:gap-8">

                {{-- Logo Kiri --}}
                <div class="flex-shrink-0">
                    {{-- [PERUBAHAN] Menambahkan class untuk membuat gambar menjadi lingkaran --}}
                    <img src="{{ asset('images/polreslogocowo.png') }}" alt="Logo Kiri"
                        class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
                </div>

                {{-- Teks Judul --}}
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-700">Lacak Aduan Anda</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-lg">
                        Masukkan nomor tiket yang Anda terima di email untuk melihat status aduan Anda.
                    </p>
                </div>

                {{-- Logo Kanan --}}
                <div class="flex-shrink-0">
                    {{-- [PERUBAHAN] Menambahkan class untuk membuat gambar menjadi lingkaran --}}
                    <img src="{{ asset('images/polreslogocewe.png') }}" alt="Logo Kanan"
                        class="h-16 w-16 md:h-24 md:w-24 object-cover rounded-full shadow-lg border-4 border-white/50">
                </div>

            </div>

            <div class="glass p-8 rounded-2xl mb-8">
                <form action="{{ route('lacak.aduan') }}" method="GET" class="flex items-center gap-4">
                    <div class="flex-grow">
                        <label for="keyword" class="sr-only">Nomor Tiket</label>
                        <input type="text" id="keyword" name="keyword" value="{{ request('keyword') }}"
                            class="w-full p-3 bg-white/50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Ketik nomor tiket Anda di sini (contoh: PGK-000001)..." required>
                    </div>
                    <button type="submit"
                        class="px-6 py-3 font-semibold text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition">
                        Cari Aduan
                    </button>
                </form>
            </div>

            {{-- Ganti seluruh blok ini dari @if sampai @endif --}}
            @if (request()->filled('keyword'))
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Hasil Pencarian untuk "{{ request('keyword') }}"
                </h3>

                @if ($pengaduans->isNotEmpty())
                    <div class="space-y-8">
                        @foreach ($pengaduans as $pengaduan)
                            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                                <div class="flex justify-between items-start">
                                    {{-- Ganti div ini --}}
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-800">Nomor Tiket:
                                            {{ $pengaduan->nomor_tiket }}</h3>

                                        {{-- Detail Laporan Tambahan --}}
                                        <div class="mt-3 space-y-2 text-sm text-gray-600">
                                            <p><span class="font-semibold w-32 inline-block">Nama Pelapor</span>:
                                                {{ $pengaduan->nama_pelapor }}</p>
                                            <p><span class="font-semibold w-32 inline-block">Jenis Kasus</span>:
                                                {{ Str::limit($pengaduan->isi_laporan, 50) }}</p>
                                            <p><span class="font-semibold w-32 inline-block">Dilaporkan pada</span>:
                                                {{ $pengaduan->created_at->translatedFormat('d F Y') }}</p>
                                            <p><span class="font-semibold w-32 inline-block">Waktu</span>:
                                                {{ $pengaduan->created_at->format('H:i') }} WITA</p>
                                        </div>
                                    </div>
                                    @if ($pengaduan->status == 'Dikembalikan')
                                        <a href="{{ route('laporan.verifikasi.form', $pengaduan->id) }}"
                                            class="text-sm bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition">
                                            Perbaiki Laporan
                                        </a>
                                    @endif
                                </div>
                                <hr class="my-4">

                                {{-- Timeline Riwayat Status --}}
                                <div class="relative border-l-2 border-blue-200 ml-3 mt-6">

                                    {{-- Loop untuk setiap riwayat status (sekarang yang terbaru di atas) --}}
                                    @foreach ($pengaduan->riwayatStatus as $riwayat)
                                        <div class="mb-8 ml-6">
                                            <span
                                                class="absolute flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full -left-3 ring-8 ring-white">
                                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <h4 class="font-semibold text-gray-900">{{ $riwayat->status }}</h4>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400">{{ $riwayat->created_at->format('d M Y, H:i') }}</time>
                                            @if ($riwayat->catatan)
                                                <p class="text-base font-normal text-gray-600">{{ $riwayat->catatan }}
                                                </p>
                                            @endif
                                        </div>
                                    @endforeach

                                    {{-- Riwayat Awal (Saat Laporan Dibuat) SEKARANG DI BAWAH --}}
                                    <div class="mb-8 ml-6">
                                        <span
                                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full -left-3 ring-8 ring-white">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <h4 class="font-semibold text-gray-900">Laporan Dibuat</h4>
                                        <time
                                            class="block mb-2 text-sm font-normal leading-none text-gray-400">{{ $pengaduan->created_at->format('d M Y, H:i') }}</time>
                                        <p class="text-base font-normal text-gray-600">Laporan Anda berhasil dikirim dan
                                            menunggu verifikasi admin.</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-10 bg-gray-50 rounded-lg">
                        <p class="text-gray-600">Tidak ada aduan yang ditemukan dengan nama tersebut.</p>
                    </div>
                @endif
            @endif
        </div>
    </section>
</x-guest-layout>

===== resources\views\peta-rawan.blade.php =====
<x-guest-layout>
    {{-- Style ini akan membuat peta mengisi hampir seluruh layar --}}
    @push('styles')
        <style>
            #map-container {
                height: calc(100vh - 150px); /* Tinggi layar dikurangi perkiraan tinggi header & footer */
                width: 100%;
            }
            #map {
                height: 100%;
                width: 100%;
                border-radius: 0; /* Menghilangkan sudut bulat */
                border: none;
            }
            /* Memastikan legenda dari layout utama tetap terlihat bagus */
            #legend {
                padding: 10px;
                line-height: 18px;
                color: #555;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            }
            #legend i {
                width: 18px;
                height: 18px;
                float: left;
                margin-right: 8px;
                opacity: 0.7;
                border-radius: 50%;
            }
        </style>
    @endpush

    <section class="w-full">
        <div class="bg-blue-600 text-white p-6 shadow-lg flex justify-center items-center gap-6">
    
            {{-- [PENAMBAHAN] Logo di sebelah kiri --}}
            <div class="flex-shrink-0 hidden md:block">
                <img src="{{ asset('images/polreslogocowo1.png') }}" alt="Logo Polres" 
                     class="h-20 w-20 object-contain rounded-full bg-white/20 p-2">
            </div>
            
            {{-- Teks Judul --}}
            <div class="text-center">
                <h1 class="text-3xl font-bold">Peta Sebaran Laporan Kerawanan</h1>
                <p class="mt-2 text-blue-100">Peta ini menampilkan semua titik laporan yang telah masuk ke sistem.</p>
            </div>
        
        </div>
        <div id="map-container">
            {{-- Elemen peta, dengan data laporan yang dikirim dari controller --}}
            <div id="map" data-laporan='{{ json_encode($laporan ?? []) }}'></div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mapElement = document.getElementById('map');
                if (!mapElement) return;

                let laporanData = [];
                try {
                    laporanData = JSON.parse(mapElement.dataset.laporan);
                } catch (e) {
                    console.error("Gagal mem-parsing data laporan:", e);
                }

                const gorontaloCoords = [0.5406, 123.0623];
                const map = L.map('map').setView(gorontaloCoords, 12);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'Â© OpenStreetMap'
                }).addTo(map);

                const markers = L.markerClusterGroup();
                
                laporanData.forEach(function(lpr) {
                    if (lpr.latitude && lpr.longitude) {
                        const popupContent = `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                        
                        // [PERUBAHAN] Menitipkan nama Polsek ke dalam options marker
                        const marker = L.marker([lpr.latitude, lpr.longitude], {
                            polsekName: lpr.tujuan_polsek // Menitipkan data Polsek
                        }).bindPopup(popupContent);

                        markers.addLayer(marker);
                    }
                });

                map.addLayer(markers);

                // [PENAMBAHAN] Logika untuk menampilkan tooltip saat hover
                let polsekTooltip; // Variabel untuk menyimpan tooltip

                markers.on('clustermouseover', function (e) {
                    // 1. Ambil semua marker di dalam cluster
                    const childMarkers = e.layer.getAllChildMarkers();
                    
                    // 2. Kumpulkan nama Polsek dari setiap marker
                    const polsekNames = childMarkers.map(marker => marker.options.polsekName);
                    
                    // 3. Buat daftar nama Polsek yang unik (agar tidak ada nama yang berulang)
                    const uniquePolsekNames = [...new Set(polsekNames)];
                    
                    // 4. Buat konten HTML untuk tooltip
                    const tooltipContent = '<div class="font-semibold mb-1">Wilayah Polsek:</div>' + uniquePolsekNames.join('<br>');

                    // 5. Buat dan tampilkan tooltip yang mengikuti kursor
                    polsekTooltip = L.tooltip({ sticky: true })
                        .setLatLng(e.latlng)
                        .setContent(tooltipContent)
                        .addTo(map);
                });

                // Event untuk menghilangkan tooltip saat mouse menjauh
                markers.on('clustermouseout', function (e) {
                    if (polsekTooltip) {
                        map.closeTooltip(polsekTooltip);
                    }
                });

                // Legenda (tidak berubah)
                const legend = L.control({ position: 'bottomright' });
                legend.onAdd = function(map) {
                    const div = L.DomUtil.create('div', 'info legend');
                    div.id = 'legend';
                    const colors = ['#b5e28c', '#f1d357', '#fd9c73'];
                    const labels = ['Kepadatan Rendah', 'Kepadatan Sedang', 'Kepadatan Tinggi'];
                    div.innerHTML = '<b>Kepadatan Laporan</b><br>';
                    for (let i = 0; i < labels.length; i++) {
                        div.innerHTML += `<i style="background:${colors[i]}"></i> ${labels[i]}<br>`;
                    }
                    return div;
                };
                legend.addTo(map);
            });
        </script>
    @endpush
</x-guest-layout>

===== resources\views\welcome.blade.php =====
<x-guest-layout>

    <section class="flex-1 flex flex-col items-center justify-center text-center p-10 relative min-h-[80vh] bg-gradient-to-br from-blue-50 to-blue-100">
        {{-- Lebar maksimal diperbesar agar logo dan teks muat berdampingan --}}
        <div class="glass p-8 md:p-12 rounded-2xl max-w-5xl animate-fadeInUp relative z-10">
            {{-- Menggunakan flexbox untuk layout, stacking di mobile, row di desktop --}}
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                
                <!-- [PENAMBAHAN] Kolom Kiri: Logo Placeholder -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/polreslogocowo.png') }}" alt="Logo Polres Gorontalo Kota" 
                         class="w-32 h-32 md:w-48 md:h-48 rounded-full object-cover shadow-lg border-4 border-white/50">
                </div>
    
                <!-- Kolom Kanan: Teks dan Tombol Aksi -->
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 leading-tight drop-shadow-lg">
                        Pengaduan Masyarakat
                    </h1>
                    <p class="mt-6 mb-8 text-blue-800 text-lg">
                        Sampaikan laporan Anda dengan mudah, aman, dan transparan. <br>Polres Gorontalo Kota siap melayani dan menjaga keamanan masyarakat.
                    </p>
                    <a href="#lapor"
                       class="inline-block px-8 py-3.5 font-semibold text-white bg-blue-600 rounded-full shadow-lg transition transform hover:bg-blue-500 hover:shadow-blue-500/50 hover:scale-105">
                        Laporkan Sekarang
                    </a>
                </div>
    
            </div>
        </div>
    </section>

    @include('partials.report-form', ['errors' => $errors])

    {{-- <section id="tentang" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700">Tentang PoldaCare</h2>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">PoldaCare adalah platform resmi Polda untuk
            menerima laporan masyarakat secara online, dirancang untuk memberikan pelayanan yang cepat, transparan, dan
            terpercaya dengan teknologi modern.</p>
    </section>

    <section id="fitur" class="p-10 max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aduan Mudah</h4>
            <p class="text-gray-600 leading-relaxed">Laporkan masalah secara langsung melalui platform kami tanpa perlu
                mengunjungi kantor.</p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Transparan</h4>
            <p class="text-gray-600 leading-relaxed">Pantau perkembangan laporan Anda secara real-time dengan laporan
                yang jelas dan lengkap.</p>
        </div>
        <div
            class="glass p-8 rounded-2xl transition transform hover:translate-y-[-5px] hover:shadow-2xl hover:bg-blue-100/60 backdrop-blur-md">
            <h4 class="font-bold text-blue-700 mb-3 text-2xl">Aman</h4>
            <p class="text-gray-600 leading-relaxed">Identitas dan data pelapor dijamin kerahasiaannya dengan sistem
                keamanan terkini.</p>
        </div>
    </section>

    <section id="kontak" class="p-10 max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-blue-700">Kontak Kami</h2>
        <p class="text-gray-600 text-lg">Hubungi kami melalui email <a href="mailto:pengaduan@polda.go.id"
                class="font-semibold text-blue-600 hover:text-blue-800 transition underline">{{ 'pengaduan@polda.go.id' }}</a>
            atau kunjungi kantor Polda terdekat.</p>
    </section> --}}

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // =================================================================
            // BAGIAN 1: KODE PETA CLUSTER ANDA (TIDAK ADA YANG DIUBAH)
            // =================================================================
            const gorontaloCoords = [0.5406, 123.0623];
            const map = L.map('map').setView(gorontaloCoords, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Â© OpenStreetMap'
            }).addTo(map);

            let marker;

            function updateCoordinates(latlng) {
                document.getElementById('latitude').value = latlng.lat;
                document.getElementById('longitude').value = latlng.lng;
                document.getElementById('koordinat').textContent = `${latlng.lat.toFixed(6)}, ${latlng.lng.toFixed(6)}`;
            }

            function placeMarker(latlng) {
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng, { draggable: true }).addTo(map);
                    marker.on('dragend', (event) => updateCoordinates(event.target.getLatLng()));
                }
                updateCoordinates(latlng);
                map.panTo(latlng); // Bonus: Otomatis geser peta ke lokasi
            }

            map.on('click', (e) => placeMarker(e.latlng));

            const markers = L.markerClusterGroup();
            
            // Mengambil data dari atribut HTML, ini cara yang paling aman
            const mapElement = document.getElementById('map');
            let laporanData = [];
            try {
                laporanData = JSON.parse(mapElement.dataset.laporan);
            } catch (e) {
                console.error("Gagal mem-parsing data laporan:", e);
            }

            laporanData.forEach(function(lpr) {
                if (lpr.latitude && lpr.longitude) {
                    const popupContent = `<b>Status: ${lpr.status}</b><br>${lpr.isi_laporan.substring(0, 50)}...`;
                    markers.addLayer(L.marker([lpr.latitude, lpr.longitude]).bindPopup(popupContent));
                }
            });

            map.addLayer(markers);

            const legend = L.control({ position: 'bottomright' });
            legend.onAdd = function(map) {
                const div = L.DomUtil.create('div', 'info legend');
                div.id = 'legend';
                const grades = [1, 10, 50], labels = ['Aman', 'Waspada', 'Rawan'], colors = ['#6ecc3999', '#FFD700', '#FF4500'];
                div.innerHTML += '<b>Tingkat Kerawanan</b><br>';
                for (let i = 0; i < grades.length; i++) {
                    div.innerHTML += `<i style="background:${colors[i]}"></i> ${labels[i]} (${grades[i]}${grades[i+1] ? '&ndash;'+(grades[i+1]-1) : '+'})<br>`;
                }
                return div;
            };
            legend.addTo(map);

            // =================================================================
            // BAGIAN 2: LOGIKA BARU UNTUK TOMBOL "GUNAKAN LOKASI SAYA"
            // =================================================================
            const getLocationBtn = document.getElementById('get-location-btn');
            const locationStatus = document.getElementById('location-status');
            const alamatTextarea = document.getElementById('alamat_pelapor');

            if (getLocationBtn) {
                getLocationBtn.addEventListener('click', function() {
                    if (!navigator.geolocation) {
                        locationStatus.textContent = 'Geolocation tidak didukung browser ini.';
                        return;
                    }

                    locationStatus.textContent = 'Mencari lokasi Anda...';
                    locationStatus.style.color = '#3B82F6'; // Warna biru

                    navigator.geolocation.getCurrentPosition(
                        // Jika berhasil
                        (position) => {
                            const lat = position.coords.latitude;
                            const lng = position.coords.longitude;
                            const latlng = { lat, lng };

                            // Panggil fungsi placeMarker yang sudah ada untuk update peta
                            placeMarker(latlng);

                            // Ambil nama alamat dari koordinat (Reverse Geocoding)
                            const apiUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`;
                            
                            fetch(apiUrl)
                                .then(response => response.json())
                                .then(data => {
                                    if (data && data.display_name) {
                                        alamatTextarea.value = data.display_name;
                                    }
                                    locationStatus.textContent = 'Lokasi berhasil ditemukan!';
                                    locationStatus.style.color = '#16A34A'; // Warna hijau
                                })
                                .catch(error => {
                                    console.error('Error fetching address:', error);
                                    locationStatus.textContent = 'Gagal mendapatkan nama jalan.';
                                    locationStatus.style.color = '#DC2626'; // Warna merah
                                });
                        },
                        // Jika gagal
                        (error) => {
                            let message = "Terjadi error tidak dikenal.";
                            switch (error.code) {
                                case error.PERMISSION_DENIED: message = "Akses lokasi ditolak. Izinkan di pengaturan browser."; break;
                                case error.POSITION_UNAVAILABLE: message = "Informasi lokasi tidak tersedia."; break;
                                case error.TIMEOUT: message = "Waktu permintaan lokasi habis."; break;
                            }
                            locationStatus.textContent = message;
                            locationStatus.style.color = '#DC2626'; // Warna merah
                        }
                    );
                });
            }
        });
    </script>
@endpush

</x-guest-layout>

```


## Entry Points & Main Configs Content
```
===== public\index.php =====
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

===== artisan =====
#!/usr/bin/env php
<?php

use Illuminate\Foundation\Application;
use Symfony\Component\Console\Input\ArgvInput;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and handle the command...
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

$status = $app->handleCommand(new ArgvInput);

exit($status);

===== resources\js\app.js =====
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

===== vite.config.js =====
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

===== config\app.php =====
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'Asia/Makassar',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];

===== config\database.php =====
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

```

== Selesai ==
