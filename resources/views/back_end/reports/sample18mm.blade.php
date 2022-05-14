<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <style>
        @page {
            size: 18mm 29.7mm;
            margin: 0mm 0mm 0mm 0mm;
        }

        @media print {

            @page {
                size: auto;
                margin: 0;
            }

            body {
                padding: 5px 25px 5px 5px;
            }

            html,
            body {
                font-size: 10px;
            }
        }

        .font {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-top: 5px;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%
        }

        .col-6 {
            width: 50%;
        }

        .tborderth {
            border-top: 1px solid #212121;
            padding: 5px;
            margin: 0px;
        }

        .tbleft {
            /*padding-left: 10px;*/
            border-left: 1px solid #212121
        }

        .tbright {
            padding-right: 10px;
            border-right: 1px solid #212121
        }

        .tborder {
            /* border-left: 1px solid #212121; */
            /* border-right: 1px solid #212121; */
            /* border-top: 1px solid #212121; */
            border-bottom: 1px solid #212121;
            /* padding: 5px; */
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 0px;

        }

        .alright {
            text-align: right
        }

        .smargin {
            padding: 5px;
        }

        .bold-100 {
            font-weight: 500;
        }

        .trcolor {
            background-color: rgb(238, 238, 238);
            -webkit-print-color-adjust: exact;
        }

        .text-align-right {
            /*margin-left: auto;*/
            /*margin-right: 0px;*/
        }

        .text-center {
            text-align: center;
        }

    </style>

</head>

<body class="font">

    <div>
        <div class="text-center">


            <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="90px"
                    viewBox="0 0 200 133.5" enable-background="new 0 0 200 133.5" xml:space="preserve">
                    <path d="M9.528,62.631c-0.195-3.767,2.319-6.576,6.007-6.831c3.726-0.258,6.949,2.386,7.002,6.132
c0.119,8.425,0.12,16.855-0.002,25.28c-0.052,3.58-2.797,6.146-6.364,6.154c-3.097,0.007-6.492-1.753-6.649-5.809
c-0.177-4.568-0.224-9.155-0.012-13.72c0.162-3.488,3.151-5.901,6.807-5.554c-0.604,0.362-0.868,0.577-1.171,0.692
c-1.207,0.457-1.829,1.295-1.828,2.599c0.005,6.138-0.014,12.277,0.014,18.415c0.007,1.566,1.017,2.481,2.574,2.506
c1.679,0.026,2.715-0.847,2.72-2.5c0.028-10.248,0.027-20.496,0.007-30.743c-0.003-1.684-1.007-2.61-2.624-2.608
c-1.637,0.001-2.523,0.852-2.691,2.584C13.087,61.606,11.958,62.648,9.528,62.631z" />
                    <path d="M138.537,92.933c3.77,2.949,4.737,6.029,2.968,9.321c-1.399,2.604-4.916,3.854-7.989,2.839
c-2.817-0.93-4.508-3.524-4.106-6.298c2.108-0.235,3.376,0.888,3.735,3.31c0.303,2.046,1.161,2.722,3.11,2.508
c1.271-0.14,2.057-0.816,2.091-2.081c0.065-2.391,0.054-4.785-0.001-7.176c-0.033-1.438-1.113-1.91-2.314-2.067
c-5.064-0.664-6.8-2.589-6.801-7.619c0-3.746-0.031-7.493,0.015-11.239c0.032-2.662,1.165-4.682,3.689-5.794
c2.704-1.191,5.166-0.668,7.397,1.113c1.391,1.111,1.926,2.694,1.941,4.415c0.038,4.318,0.064,8.638-0.008,12.955
c-0.038,2.268-1.013,4.098-3.111,5.194c-0.136,0.071-0.271,0.15-0.386,0.25C138.694,92.626,138.658,92.733,138.537,92.933z
M138.238,80.623c0-2.963,0.017-5.927-0.006-8.89c-0.015-1.868-0.791-2.717-2.415-2.746c-1.708-0.03-2.491,0.805-2.497,2.783
c-0.017,5.926-0.014,11.853-0.001,17.78c0.004,1.919,0.717,2.7,2.386,2.721c1.758,0.022,2.511-0.769,2.527-2.758
C138.256,86.55,138.238,83.586,138.238,80.623z" />
                    <path
                        d="M186.683,93.446c0-0.735,0-1.297,0-1.859c0-6.452,0.047-12.906-0.05-19.356c-0.015-0.974-0.445-2.274-1.15-2.808
c-0.641-0.486-2.059-0.437-2.866-0.056c-0.628,0.296-1.177,1.462-1.189,2.25c-0.094,6.607-0.055,13.216-0.056,19.825
c0,0.611,0,1.222,0,1.751c-0.252,0.13-0.338,0.209-0.432,0.218c-3.517,0.331-3.517,0.33-3.517-3.169c0-6.817,0-13.633,0-20.45
c0-0.558,0-1.116,0-2.246c2.4,1.926,4.56,0.527,6.74,0.507c3.621-0.032,6.362,2.666,6.42,6.279
c0.096,5.983,0.015,11.968,0.04,17.952c0.004,0.879-0.303,1.227-1.181,1.174C188.616,93.407,187.784,93.446,186.683,93.446z" />
                    <path d="M174.611,80.635c-0.13,2.643-0.056,5.316-0.442,7.921c-0.444,2.992-3.393,4.972-6.538,4.778
c-3.365-0.207-6.085-2.402-6.19-5.449c-0.168-4.826-0.169-9.667,0.012-14.492c0.114-3.034,3.393-5.502,6.616-5.37
c3.532,0.145,6.217,2.695,6.386,6.206c0.102,2.129,0.019,4.267,0.019,6.4C174.519,80.632,174.565,80.634,174.611,80.635z
M170.387,80.751c0-2.965,0.022-5.929-0.008-8.894c-0.019-1.9-0.904-2.853-2.513-2.826c-1.684,0.028-2.491,0.92-2.497,2.879
c-0.016,5.877-0.016,11.754,0,17.632c0.005,1.754,0.927,2.806,2.406,2.854c1.668,0.054,2.578-0.861,2.6-2.752
C170.412,86.68,170.387,83.715,170.387,80.751z" />
                    <path d="M158.254,80.775c0,2.079,0.042,4.158-0.009,6.235c-0.093,3.701-2.958,6.409-6.642,6.339
c-3.655-0.069-6.393-2.746-6.432-6.392c-0.045-4.157-0.039-8.314-0.002-12.471c0.035-3.957,2.78-6.292,6.566-6.424
c3.651-0.127,6.412,2.653,6.509,6.321C158.301,76.512,158.254,78.644,158.254,80.775z M154.153,80.789
c0-3.069-0.011-6.138,0.006-9.206c0.006-1.081-0.292-1.899-1.393-2.344c-1.911-0.772-3.572,0.415-3.638,2.79
c-0.08,2.859-0.029,5.721-0.021,8.582c0.008,3.12-0.039,6.242,0.079,9.358c0.06,1.579,1.244,2.517,2.646,2.419
c1.529-0.107,2.306-0.983,2.317-2.704C154.167,86.719,154.154,83.754,154.153,80.789z" />
                    <path d="M113.26,74.879c-0.695-4.921,4.074-7.275,7.125-6.782c3.868,0.626,5.692,2.694,5.828,7.01
c0.131,4.153,0.055,8.321-0.133,12.474c-0.156,3.442-2.915,5.782-6.484,5.821c-3.402,0.037-6.274-2.511-6.508-5.869
c-0.101-1.45-0.093-2.917-0.003-4.369c0.216-3.483,2.938-5.914,6.809-5.754c-0.574,0.423-0.841,0.737-1.174,0.844
c-1.146,0.365-1.698,1.105-1.694,2.303c0.009,3.174-0.021,6.348,0.014,9.522c0.016,1.464,1.01,2.371,2.487,2.403
c1.683,0.037,2.622-0.73,2.632-2.367c0.036-6.244,0.031-12.488,0.006-18.733c-0.006-1.553-0.916-2.411-2.417-2.455
c-1.647-0.049-2.563,0.734-2.721,2.324C116.769,73.843,115.805,74.794,113.26,74.879z" />
                    <path
                        d="M77.608,77.483c-0.053,0.238-0.058,0.414-0.1,0.424c-2.513,0.564-2.534,2.446-2.467,4.47
c0.079,2.391,0.003,4.787,0.024,7.181c0.018,1.951,0.941,2.977,2.609,2.969c1.769-0.009,2.596-0.914,2.599-2.92
c0.01-5.933,0.01-11.866,0-17.798c-0.003-1.95-0.771-2.838-2.444-2.905c-1.736-0.069-2.527,0.67-2.77,2.587
c-0.291,2.286-1.299,3.23-3.826,3.431c-0.242-1.991,0.377-3.732,1.787-5.021c2.128-1.944,4.678-2.389,7.377-1.257
c2.648,1.11,3.824,3.223,3.83,6.035c0.009,4.059,0.028,8.119-0.005,12.178c-0.031,3.788-2.746,6.474-6.497,6.503
c-3.727,0.029-6.543-2.681-6.569-6.433c-0.012-1.706-0.036-3.457,0.31-5.111C72.055,79.004,74.799,77.168,77.608,77.483z" />
                    <path d="M46.863,77.632c-0.03,0.094-0.044,0.258-0.095,0.27c-2.53,0.607-2.441,2.542-2.386,4.537c0.067,2.393,0,4.79,0.021,7.185
c0.017,1.934,0.816,2.824,2.505,2.866c1.763,0.044,2.706-0.843,2.72-2.823c0.043-5.987,0.043-11.975-0.001-17.962
c-0.014-1.891-0.834-2.728-2.429-2.795c-1.709-0.072-2.539,0.693-2.803,2.583c-0.323,2.308-1.249,3.187-3.634,3.448
c-0.843-2.755,1.258-5.874,4.474-6.64c4.541-1.082,8.268,1.764,8.337,6.447c0.059,4.008,0.059,8.019-0.003,12.027
c-0.055,3.51-2.084,5.895-5.349,6.478c-3.119,0.557-6.366-1.021-7.282-3.959c-0.855-2.745-0.889-5.668,0.136-8.417
C41.951,78.527,44.897,77.004,46.863,77.632z" />
                    <path d="M25.642,55.884c2.132-0.006,3.294,0.882,3.646,2.742c0.115,0.607,0.147,1.237,0.147,1.857
c0.009,9.627,0.003,19.254,0.009,28.882c0.001,2.065,0.759,3.031,2.417,3.154c1.667,0.124,2.631-0.767,2.906-2.688
c0.335-2.336,1.424-3.322,3.665-3.319c0.798,4.014-3.188,7.512-7.612,6.718c-3.124-0.56-5.253-2.925-5.267-6.041
c-0.044-10.199-0.016-20.399-0.011-30.599C25.544,56.389,25.598,56.189,25.642,55.884z" />
                    <path d="M98.185,55.995c1.739-0.178,3.032,0.559,3.469,2.106c0.221,0.784,0.297,1.632,0.299,2.451
c0.02,9.729,0.08,19.458-0.037,29.185c-0.026,2.188,1.983,3.429,3.923,2.603c1.065-0.454,1.493-1.311,1.544-2.463
c0.093-2.092,1.246-3.157,3.471-3.326c0.74,3.163-2.057,6.517-5.594,6.708c-4.152,0.224-7.121-2.237-7.168-6.396
C97.978,76.72,98.06,66.574,98.07,56.429C98.07,56.282,98.146,56.135,98.185,55.995z" />
                    <path d="M56.572,67.527c2.32,1.778,4.358,0.683,6.445,0.53c3.887-0.285,7.049,3.09,6.581,6.698
c-2.071,0.315-3.578-0.855-3.817-2.963c-0.244-2.158-1.054-2.972-2.848-2.86c-1.678,0.104-2.421,1.052-2.423,3.131
c-0.005,6.497-0.002,12.995-0.002,19.492c0,0.564,0,1.128,0,1.607c-0.222,0.137-0.303,0.228-0.389,0.235
c-3.547,0.252-3.547,0.251-3.547-3.248c0-6.757,0-13.514,0-20.272C56.572,69.313,56.572,68.748,56.572,67.527z" />
                    <path d="M38.524,71.802c-3.916,0.386-7.586-3.241-6.397-6.414c0.209,0.289,0.453,0.487,0.507,0.727
c0.297,1.317,1.121,1.824,2.437,1.915C37.423,68.193,38.559,69.465,38.524,71.802z" />
                    <path d="M102.97,8.085c-1.056,1.332-2.069,2.61-3.207,4.045c-0.89-1.115-1.752-2.124-2.531-3.194
c-0.747-1.025-0.482-1.74,0.723-2.224C99.557,6.071,101.618,6.583,102.97,8.085z" />
                    <path d="M120.971,41.924c-0.98-0.01-1.962-1.048-1.958-2.069c0.004-1.053,1.038-2.045,2.145-2.057
c0.903-0.01,1.932,1.092,1.947,2.085C123.121,40.977,122.119,41.936,120.971,41.924z" />
                    <path d="M97.057,29.995c-1.164-0.224-1.945-0.787-1.886-2.068c0.055-1.204,0.683-1.947,1.912-2.001
c1.063-0.047,2.071,1.079,2.022,2.148C99.058,29.09,98.045,30.028,97.057,29.995z" />
                    <path d="M85.918,45.743c-0.014-0.962,1.155-2.044,2.222-1.97c1.29,0.091,1.717,1.068,1.85,2.139
c0.119,0.955-0.997,1.967-2.013,1.971C86.938,47.888,85.934,46.844,85.918,45.743z" />
                    <path d="M91.587,45.643c-0.01-0.823,1.085-1.952,2.122-1.89c1.246,0.074,1.795,0.961,1.937,2.07c0.131,1.024-1.03,2.138-2.105,2.042
C92.331,47.758,91.726,46.988,91.587,45.643z" />
                    <path d="M107.661,45.89c0.036,1.427-0.912,1.914-1.981,1.925c-1.173,0.012-1.854-0.828-1.955-1.986
c-0.091-1.041,0.999-2.068,2.074-2.062C106.93,43.774,107.687,44.665,107.661,45.89z" />
                    <path d="M113.296,45.879c0.025,1.285-0.738,1.883-1.895,1.985c-1.015,0.089-2.086-1.069-2.072-2.104
c0.014-1.05,1.05-1.999,2.177-1.995C112.539,43.768,113.287,44.653,113.296,45.879z" />
                    <path d="M97.055,41.896c-1.02,0.005-2.065-1.086-1.996-2.139c0.081-1.239,0.891-1.82,2.021-1.943
c1.013-0.111,2.008,1.001,2.011,2.132C99.095,40.928,98.088,41.891,97.055,41.896z" />
                    <path d="M80.928,39.901c-0.017,1.129-0.997,2.099-2.139,1.998c-1.23-0.109-1.801-0.949-1.893-2.097
c-0.083-1.04,1.022-2.029,2.147-2.011C80.016,37.806,80.944,38.845,80.928,39.901z" />
                    <path d="M101.703,16.718c-0.071,1.191-0.794,1.864-1.929,2.03c-0.987,0.144-2.126-1.039-2.047-2.107
c0.09-1.222,0.926-1.879,2.052-1.939C101.043,14.635,101.573,15.512,101.703,16.718z" />
                    <path d="M119.294,20.477c1.153,0.069,1.703,0.929,1.724,2.042c0.023,1.213-0.74,1.892-1.971,1.92
c-1.194,0.027-2.065-0.884-1.963-2.105C117.187,21.114,117.926,20.507,119.294,20.477z" />
                    <path d="M96.073,22.385c-0.113,1.26-0.708,1.987-1.948,2.053c-1.182,0.063-2.112-0.822-2.05-2.021c0.063-1.215,0.771-1.863,2-1.912
C95.422,20.452,95.795,21.393,96.073,22.385z" />
                    <path d="M101.704,22.577c-0.111,1.023-0.68,1.841-1.909,1.854c-1.201,0.013-1.891-0.782-2.061-1.905
c-0.148-0.98,0.987-2.092,2.034-2.141C100.673,20.342,101.699,21.427,101.704,22.577z" />
                    <path d="M107.325,22.704c-0.12,0.981-0.753,1.685-1.965,1.748c-0.975,0.05-2.115-1.169-1.98-2.168
c0.158-1.174,0.936-1.83,2.093-1.899C106.388,20.331,107.365,21.517,107.325,22.704z" />
                    <path d="M80.821,24.463c-1.135-0.128-1.825-0.89-1.809-2.017c0.015-1.118,0.641-1.933,1.933-1.94
c1.108-0.006,2.091,0.956,1.994,2.067C82.835,23.774,82.097,24.384,80.821,24.463z" />
                    <path d="M105.679,31.763c0.998,0.135,1.577,0.919,1.63,2.057c0.06,1.3-0.86,1.869-1.961,1.915c-1.22,0.051-1.834-0.843-1.968-1.955
C103.249,32.704,104.285,31.764,105.679,31.763z" />
                    <path d="M100.8,39.857c0-1.122,1.075-2.329,2.047-1.965c0.761,0.285,1.634,1.172,1.798,1.934c0.241,1.115-0.656,1.92-1.821,2.061
C101.677,42.027,100.8,41.08,100.8,39.857z" />
                    <path d="M115.482,45.698c0.052-1.29,0.941-1.785,2.021-1.925c0.908-0.117,1.955,1.086,1.941,2.06
c-0.015,1.06-1.128,2.105-2.161,2.027C116.269,47.786,115.446,46.798,115.482,45.698z" />
                    <path d="M116.402,27.907c-0.021,1.353-0.791,2.004-1.936,2.038c-1.204,0.036-1.893-0.782-2.034-1.93
c-0.122-0.992,1.055-2.143,2.093-2.086C115.781,26,116.286,26.831,116.402,27.907z" />
                    <path d="M128.865,28.151c-0.053,0.968-0.771,1.648-1.888,1.84c-0.975,0.168-2.113-0.984-2.072-2.063
c0.047-1.238,0.908-1.816,2.002-1.982C127.885,25.799,128.823,26.812,128.865,28.151z" />
                    <path d="M96.028,33.755c0.012,1.064-0.907,2.061-1.952,2.001c-1.201-0.069-1.959-0.783-1.977-1.973
c-0.018-1.211,0.775-1.889,1.954-2C95.083,31.685,96.015,32.666,96.028,33.755z" />
                    <path d="M89.532,34.105c-0.034,0.862-0.689,1.556-1.889,1.655c-1.072,0.088-2.289-1.035-1.96-2.061
c0.245-0.764,1.127-1.552,1.91-1.857C88.508,31.487,89.493,32.609,89.532,34.105z" />
                    <path d="M83.886,34.301c-0.052,0.81-0.876,1.353-2.006,1.449c-0.963,0.082-2.229-1.157-1.862-1.994
c0.352-0.805,1.221-1.615,2.048-1.918C82.97,31.506,83.923,32.716,83.886,34.301z" />
                    <path d="M77.917,33.698c0.024,1.105-0.908,2.116-1.957,2.056c-1.194-0.068-1.968-0.763-1.987-1.964
c-0.019-1.213,0.768-1.957,1.945-1.989C77.137,31.767,77.769,32.568,77.917,33.698z" />
                    <path d="M116.396,39.941c-0.035,1.289-0.909,1.794-1.993,1.941c-0.902,0.122-1.98-1.059-1.986-2.019
c-0.007-0.949,1.059-2.046,1.987-2.046C115.492,37.816,116.42,38.806,116.396,39.941z" />
                    <path d="M106.423,39.764c0.05-1.282,0.926-1.788,2.004-1.931c0.934-0.123,1.933,1.02,1.929,2.037
c-0.004,1.002-1.013,2.049-1.96,2.033C107.298,41.885,106.386,40.896,106.423,39.764z" />
                    <path d="M111.428,35.766c-1.022,0.016-2.286-1.152-1.939-2.094c0.281-0.763,1.125-1.539,1.901-1.842
c0.863-0.336,2.187,1.049,2.041,2.004C113.266,34.925,112.715,35.764,111.428,35.766z" />
                    <path d="M99.715,31.745c1.179,0.155,1.875,0.826,1.971,2.012c0.084,1.028-0.904,2.049-1.951,2.001
c-1.21-0.055-1.928-0.742-1.945-1.973C97.773,32.54,98.525,31.928,99.715,31.745z" />
                    <path d="M133.88,22.488c-0.031,1.145-0.923,2.055-1.982,1.928c-1.181-0.142-1.941-0.907-1.956-2.05
c-0.016-1.225,0.964-1.794,2.048-1.964C132.87,20.264,133.907,21.498,133.88,22.488z" />
                    <path d="M66.101,22.302c0.235-1.037,0.775-1.786,2.044-1.802c1.249-0.015,1.765,0.758,1.888,1.819
c0.125,1.073-0.936,2.152-2.023,2.105C66.752,24.37,66.245,23.543,66.101,22.302z" />
                    <path d="M75.122,27.814c-0.018,1.19-1.075,2.28-2.022,2.181c-1.201-0.126-1.805-0.953-1.944-2.075
c-0.109-0.879,1.126-2.096,2.025-1.957C74.302,26.137,75.025,26.822,75.122,27.814z" />
                    <path d="M117.971,35.773c-1.011-0.024-1.954-1.048-1.833-2.1c0.136-1.183,0.856-1.913,2.057-1.88
c1.282,0.036,1.724,1.027,1.82,2.115C120.107,34.944,119.096,35.799,117.971,35.773z" />
                    <path d="M123.946,35.769c-0.924,0.033-2.043-1.012-2.083-1.944c-0.039-0.914,1.017-2.051,1.981-2.042
c1.251,0.011,1.857,0.794,1.994,1.947C125.955,34.717,124.969,35.733,123.946,35.769z" />
                    <path d="M93.312,39.952c-1.167,0.87-1.817,1.62-2.628,1.89c-0.901,0.3-2.093-1.038-2.056-2.052c0.035-0.937,1.239-2.225,2.04-1.912
C91.506,38.204,92.156,39.01,93.312,39.952z" />
                    <path d="M83.004,39.902c-0.041-1.308,0.816-1.85,1.9-2.055c0.909-0.172,2.006,0.938,2.064,1.947c0.055,0.953-0.976,2.08-1.928,2.107
C84.118,41.927,83.039,40.867,83.004,39.902z" />
                    <path d="M102.635,29.963c-0.973-0.163-1.789-0.633-1.835-1.928c-0.047-1.323,0.826-1.852,1.896-2.073
c0.919-0.19,1.992,0.925,2.033,1.959C104.77,28.968,103.864,29.921,102.635,29.963z" />
                    <path d="M83.003,27.946c0.018-1.294,0.885-1.817,1.97-1.98c0.904-0.136,2.068,1.05,1.98,2.01c-0.107,1.155-0.782,1.899-1.993,1.976
C84,30.012,82.999,28.947,83.003,27.946z" />
                    <path d="M83.872,46.094c0.029,1.025-0.838,1.55-1.922,1.73c-0.895,0.148-2.074-1.019-2.014-1.979
c0.075-1.182,0.81-1.875,1.973-2.014C82.851,43.719,83.853,44.779,83.872,46.094z" />
                    <path d="M102.016,45.793c0.024,1.298-0.833,1.836-1.914,2.031c-0.883,0.159-2-0.993-2.047-1.965
c-0.047-0.981,0.916-1.974,1.962-2.023C100.986,43.791,101.988,44.772,102.016,45.793z" />
                    <g>
                        <path d="M53.89,118.228l-1.869,2.314v3.223h-1.46v-12.464h1.46v6.962l5.548-6.962h1.664l-4.365,5.609l4.644,6.854h-1.709
L53.89,118.228z" />
                        <path d="M70.081,120.648h-5.432l-1.124,3.116h-1.504l4.628-12.464h1.446l4.643,12.464h-1.533L70.081,120.648z M69.57,119.225
l-2.205-6.107l-2.205,6.107H69.57z" />
                        <path d="M77.177,111.301h1.46v10.915h5.533v1.549h-6.993V111.301z" />
                        <path
                            d="M95.88,112.458c0.759,0.772,1.139,1.834,1.139,3.188s-0.38,2.416-1.139,3.188c-0.76,0.771-1.801,1.157-3.125,1.157h-2.525
v3.774h-1.46v-12.464h3.985C94.079,111.301,95.12,111.687,95.88,112.458z M94.828,117.72c0.487-0.48,0.73-1.172,0.73-2.074
s-0.243-1.594-0.73-2.074c-0.486-0.48-1.192-0.721-2.117-0.721h-2.481v5.59h2.481C93.636,118.44,94.342,118.2,94.828,117.72z" />
                        <path d="M102.084,111.301h1.46v12.464h-1.46V111.301z" />
                        <path d="M111.56,112.851h-3.504v-1.55h8.453v1.55h-3.504v10.914h-1.445V112.851z" />
                        <path d="M121.021,111.301h1.46v12.464h-1.46V111.301z" />
                        <path
                            d="M132.38,119.456v4.309h-1.446v-4.345l-4.059-8.119h1.563l3.271,6.57l3.285-6.57h1.445L132.38,119.456z" />
                        <path d="M146.731,120.648H141.3l-1.124,3.116h-1.504l4.628-12.464h1.446l4.643,12.464h-1.533L146.731,120.648z M146.221,119.225
l-2.205-6.107l-2.205,6.107H146.221z" />
                    </g>
                </svg>
            </div>

            <br>
            <span style="font-size: 13px">ATARA LAGOON RESORT</span>
            <br>
            <span style="font-size: 13px">No.111, Anawasala Road, Kalpitiya</span>
            <br>
            <span style="font-size: 13px">Sri Lanka</span>
            <br>
            <span>+94 77 313 8046 / +94 77 950 2278</span>
            <hr style="color: #333333; border:1px solid #333333">

        </div>

        <div class="row">
            <div class="col-5">
                <table>

                    <tr>
                        <td class="font"><b><small>DATE</small></b></td>
                        <td>&nbsp;:</td>
                        <td class="font">
                            {{ date('d-m-Y', strtotime($data['invoicedetails']['invoice_date'])) }}
                        </td>
                    </tr>

                    <tr>
                        <td class="font"><b><small>INVOICE #</small></b></td>
                        <td>&nbsp;:</td>
                        <td class="font">{{ $data['invoicedetails']['invoice_code'] }}</td>
                    </tr>

                </table>
            </div>

            <div class="col-5" style="margin-left: auto; margin-right: 0px;">
                <table>

                    <tr>
                        <td class="font"><b><small>STAFF</small></b></td>
                        <td>&nbsp;:</td>
                        <td class="font">
                            {{ $data['invoicedetails']['staff'] }}
                        </td>
                    </tr>

                    <tr>
                        <td class="font"><b><small>TIME</small></b></td>
                        <td>&nbsp;:</td>
                        <td class="font">
                            {{ date('H:i:s', strtotime($data['invoicedetails']['invoice_date'])) }}
                        </td>
                    </tr>

                </table>
            </div>

        </div>
        <br>
        <br>
        <br>
        <div>
            <table class="table-border"
                style="border-spacing: 0; border-width: 0; padding: 0; border-width: 0; width:100%">
                <thead>
                    <tr>
                        <th class="font" style="text-align: center; width:5%">QTY</th>
                        <th class="font" style="text-align: left ; padding-left: 2%">ITEM</th>
                        <th class="font" style="text-align: right">TOTAL&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data['products'] as $key => $product)
                        <?php
                        $tot = (float) $product[4] * (float) $product[3];
                        ?>

                        <tr>
                            <td class="font text-center">{{ $product[4] }}</td>
                            <td class="font" style="padding-left: 2%">{{ $product[2] }}</td>
                            <td class="alright font">
                                {{ env('CURRENCY') . ' ' . number_format($tot, 2, '.', ',') }}
                                &nbsp;
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

        <br>
        <br>

        <div class="row">
            <table style="margin-left: auto; margin-right: 0;">

                <tr>
                    <td>Item Total</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right">
                        {{ number_format($data['invoicedetails']['invoice_total'], 2, '.', ',') }}
                    </td>
                </tr>

                <tr>
                    <td>Discount</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right">
                        ({{ number_format($data['invoicedetails']['invoice_discount'], 2, '.', ',') }})
                    </td>
                </tr>

                <tr>
                    <td>S.C ({{ $data['invoicedetails']['sc_precentage'] }} %)</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right">
                        {{ number_format($data['invoicedetails']['invoice_sc_value'], 2, '.', ',') }}
                    </td>
                </tr>

                <tr>
                    <td>VAT %</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right ; border-bottom: 1px solid black">
                        {{ number_format($data['invoicedetails']['invoice_vat'], 2, '.', ',') }}
                    </td>
                </tr>

                <tr>
                    <td>Subtotal</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right">
                        {{ number_format($data['invoicedetails']['invoice_sub_total'], 2, '.', ',') }}
                    </td>
                </tr>

                <tr>
                    <td>Other</td>
                    <td>&nbsp;:</td>
                    <td style="text-align: right">
                        {{ number_format($data['invoicedetails']['invoice_other'], 2, '.', ',') }}
                    </td>
                </tr>

                <tr style="padding-top:10px">
                    <td style="padding-top:10px; font-size: 13px"><b>Total LKR</b></td>
                    <td style="padding-top:10px">&nbsp;:</td>
                    <td style="text-align: right; padding-top:10px; border-bottom: 1px solid black ;  font-size: 13px">
                        <b>
                            {{ number_format($data['invoicedetails']['nettotal'], 2, '.', ',') }}
                        </b>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td style="border-top: 1px solid black">
                        {{-- <hr style="margin-top: 1px; color: black;"> --}}
                    </td>
                </tr>

            </table>
        </div>

        <br>
        <br>
        <p style="text-align: center; font-size: 13px">
            ********************************* Customer Copy *********************************
        </p>

        <p>Cashier: {{ Auth::user()->name }}</p>
        <hr style="color: #333333; border:1px solid #333333">
        <div class="row">
            <div class="col-5">
                <table>

                    <tr>
                        <td class="font" style="font-size: 13px">Payment</td>
                        <td class="font">&nbsp;: </td>
                    </tr>

                    <tr>
                        <td class="font" style="font-size: 13px">Amount</td>
                        <td class="font">&nbsp;:</td>
                    </tr>

                    <tr>
                        <td class="font" style="font-size: 13px">Total</td>
                        <td class="font">&nbsp;:</td>
                    </tr>

                </table>
            </div>

            <div class="col-5" style="margin-left: auto; margin-right: 0px;">
                <table>
                    <tr>
                        <td style="font-size: 13px">&nbsp;{{ $data['invoicedetails']['invoice_type'] }}</td>
                    </tr>
                    <tr>
                        <td class="font" style="font-size: 13px">
                            {{ number_format($data['invoicedetails']['nettotal'], 2, '.', ',') }}
                        </td>
                    </tr>

                    <tr>
                        <td class="font" style="font-size: 13px">
                            {{ number_format($data['invoicedetails']['nettotal'], 2, '.', ',') }}
                        </td>
                    </tr>

                </table>
            </div>

        </div>
        <hr style="color: #333333; border:1px solid #333333">
        <p style="text-align: center; font-size: 13px">
            THANK YOU FOR DINING WITH US!
            <br>
            PLEASE COME AGAIN

        </p>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
