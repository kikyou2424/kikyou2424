console.log('关键开发包');
// 加载模块
const { task, src, dest, watch, series, parallel } = require('gulp');
// nodejs的del模块用于删除文件
const del = require('del');
// // 引入web服务模块
const connect = require('gulp-connect');
//编译sass
var sass = require('gulp-sass');
// 删除dist目录
task('delDist', async() => {
        await del('./dist');
    })
    //打包字体图标
task('fonts', async() => {
        src('./fonts/*.*')
            .pipe(dest('./dist/fonts'))
            .pipe(connect.reload())
    })
    // 处理图片
task('images', async() => {
        src('./images/*.*')
            .pipe(dest('./dist/images'))
            .pipe(connect.reload())
    })
    //打包json文件
task('json', async() => {
        src('./json/*.json')
            .pipe(dest('./dist/json'))
            .pipe(connect.reload())
    })
    // 处理sass
task('sass', async() => {
    src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./dist/css'))
        .pipe(connect.reload())
});
task('css', async() => {
    src('./css/*.css')
        .pipe(dest('./dist/css'))
        .pipe(connect.reload())
})

// 处理js
task('script', async() => {
    src('./js/*.js')
        .pipe(dest('./dist/js'))
        .pipe(connect.reload())
})

// 处理html
task('html', async() => {
    src('./*.html')
        .pipe(dest('./dist'))
        .pipe(connect.reload())
})

// 监听文件变化
task('watch', async() => {
    watch('./images/*.*', series('images', 'html'));
    watch('./sass/*.scss', series('sass', 'html'));
    watch('./js/*.js', series('script', 'html'));
    watch('./css/*.css', series('css', 'html'));
    watch('./*.html', series('html'));
    watch('./json/*.json', series('json'));
})

// 启动服务，自动刷新
task('connect', async() => {
    connect.server({
        root: './dist',
        livereload: true,
        port: 3001
    });
})

// 构建开发包
task('default', series('delDist', 'images', 'fonts', 'css', 'sass', 'script', 'html', "json", 'connect', 'watch'));