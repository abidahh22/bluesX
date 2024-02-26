<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>bluesX</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    </head>
    <body>
        <main class="dashadm">
            <section class="section1">
                <div class="flex_col">
                    <h1 class="hero_title">Baby Food Recipe Input</h1>
                    <div class="content_box">
                        <div class="subtitle">
                            <input type="text" class="input-field" placeholder="Name">
                        </div>

                        <div class="subtitle1">
                            <textarea class="input-field" placeholder="Desc"></textarea>
                        </div>

                        <div class="subtitle2">
                            <textarea class="input-field" placeholder="Tools"></textarea>
                        </div>

                        <div class="subtitle4">
                            <textarea class="input-field" placeholder="Materials"></textarea>
                        </div>

                        <div class="subtitle36">
                            <label for="imageInput" class="upload-label">Choose Image</label>
                            <input type="file" id="imageInput" class="image-input" accept="image/*">
                        </div>
                        <button class="highlight">Submit</button>
                    </div>
                </div>
            </section>

            <section class="section2">
                <div class="flex_col1">
                    <h1 class="hero_title">DayCare Input</h1>
                    <div class="content_box2">
                        <div class="content_box1">
                            <div class="subtitle">
                                <input type="text" class="input-field" placeholder="Name">
                            </div>

                            <div class="subtitle8">
                                <input type="text" class="input-field" placeholder="Contact">
                            </div>

                            <div class="subtitle6">
                                <textarea class="input-field" placeholder="Address"></textarea>
                            </div>

                            <div class="subtitle36">
                                <label for="imageInput" class="upload-label">Choose Image</label>
                                <input type="file" id="imageInput" class="image-input" accept="image/*">
                            </div>

                            <div class="subtitle1">
                                <textarea class="input-field" placeholder="Desc"></textarea>
                            </div>

                        </div>
                        <button class="highlight">Submit</button>
                    </div>
                </div>
            </section>

            <section class="section3">
                <div class="flex_col2">
                    <h1 class="hero_title">Medical Center Input</h1>
                    <div class="flex_col3">
                        <div class="content_box3">
                            <div class="subtitle">
                                <input type="text" class="input-field" placeholder="Name">
                            </div>
                            <div class="subtitle36">
                                <label for="imageInput" class="upload-label">Choose Image</label>
                                <input type="file" id="imageInput" class="image-input" accept="image/*">
                            </div>
                            <div class="subtitle10">
                                <input type="text" class="input-field" placeholder="Working Hours">
                            </div>
                            <div class="subtitle41">
                                <textarea class="input-field" placeholder="Desc"></textarea>
                            </div>
                            <div class="subtitle12">
                                <textarea class="input-field" placeholder="Address"></textarea>
                            </div>
                            <div class="subtitle13">
                                <input type="text" class="input-field" placeholder="Contact">
                            </div>
                            <button class="highlight2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4">
        <div class="flex_col4">
            <h1 class="hero_title">Activities Input</h1>
            <div class="flex_col3">
                <div class="content_box7">
                    <div class="subtitle">
                        <input type="text" class="input-field" placeholder="Name">
                    </div>
                    <div class="subtitle10">
                        <input type="text" class="input-field" placeholder="Link Game Tutorials">
                    </div>
                    <div class="subtitle41">
                        <textarea class="input-field" placeholder="Desc"></textarea>
                    </div>

                    <div class="subtitle2">
                        <textarea class="input-field" placeholder="Tools"></textarea>
                    </div>

                    <div class="subtitle4">
                        <textarea class="input-field" placeholder="Materials"></textarea>
                    </div>

                    <div class="subtitle39">
                        <label for="imageInput" class="upload-label4">Choose Image</label>
                        <input type="file" id="imageInput" class="image-input4" accept="image/*">
                    </div>

                    <div class="content_box6">
                        <ul class="checkbox-list">
                            <li>
                                <input type="checkbox" id="indoorCheckbox" class="checkbox">
                                <label for="indoorCheckbox" class="subtitle-checkbox">Indoor</label>
                            </li>
                            <li>
                                <input type="checkbox" id="outdoorCheckbox" class="checkbox">
                                <label for="outdoorCheckbox" class="subtitle-checkbox">Outdoor</label>
                            </li>
                        </ul>
                    </div>
                    <button class="highlight2">Submit</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section5">
        <div class="flex_col5">
            <h1 class="hero_title">Product Input</h1>
            <div class="flex_col3">
                <div class="content_box8">
                    <div class="subtitle">
                        <input type="text" class="input-field" placeholder="Name">
                    </div>
                    <div class="subtitle10">
                        <input type="link" class="input-field" placeholder="Link E-commarce">
                    </div>
                    <div class="subtitle81">
                        <input type="text" class="input-field" placeholder="Brand">
                    </div>

                    <div class="subtitle6">
                        <textarea
                            class="input-field"
                            style="margin-top: -93px"
                            placeholder="Ingridients"></textarea>
                    </div>
                    <div class="subtitle36">
                        <label for="imageInput" class="upload-label">Choose Image</label>
                        <input type="file" id="imageInput" class="image-input" accept="image/*">
                    </div>
                    <div class="subtitle41">
                        <textarea class="input-field" placeholder="Desc"></textarea>
                    </div>
                    <button class="highlight2">Submit</button>
                </div>
            </section>

        </main>
        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
        </script>
    </body>
</html>