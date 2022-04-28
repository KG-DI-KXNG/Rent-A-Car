<template>
    <div class="">
        <sidebar />
        <div class="container-fluid col-10" id="content-wrapper">
            <top-nav />
            <div
                class="d-sm-flex align-items-center justify-content-between mb-4"
            >
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a
                    href="#"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                    ><i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report</a
                >
            </div>

            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                    >
                                        Earnings (Monthly)
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        $40,000
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i
                                        class="fas fa-calendar fa-2x text-gray-300"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                    >
                                        Earnings (Annual)
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        $215,000
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i
                                        class="fas fa-dollar-sign fa-2x text-gray-300"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-info text-uppercase mb-1"
                                    >
                                        Tasks
                                    </div>
                                    <div
                                        class="row no-gutters align-items-center"
                                    >
                                        <div class="col-auto">
                                            <div
                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                                            >
                                                50%
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div
                                                class="progress progress-sm mr-2"
                                            >
                                                <div
                                                    class="progress-bar bg-info"
                                                    role="progressbar"
                                                    style="width: 50%"
                                                    aria-valuenow="50"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i
                                        class="fas fa-clipboard-list fa-2x text-gray-300"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                                    >
                                        Pending Requests
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        18
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i
                                        class="fas fa-comments fa-2x text-gray-300"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-8 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Top inquiries</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>VIN number</th>
                                            <th>Car name</th>
                                            <th>Leads</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-muted mb-0">
                                        <tr>
                                            <td>#54981</td>
                                            <td>2017 Audi A4 Prestiger</td>
                                            <td>4</td>
                                            <td>20-01-2019</td>
                                            <td>Old</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#25425</td>
                                            <td>2016 BMW X1</td>
                                            <td>6</td>
                                            <td>26-04-2019</td>
                                            <td>New</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#45678</td>
                                            <td>2017 Audi Q3 2.0T Prestige</td>
                                            <td>9</td>
                                            <td>14-04-2019</td>
                                            <td>Old</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#47989</td>
                                            <td>1998 BMW M3</td>
                                            <td>2</td>
                                            <td>06-12-2019</td>
                                            <td>Old</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12356</td>
                                            <td>2016 BMW M3 Base</td>
                                            <td>3</td>
                                            <td>12-12-2019</td>
                                            <td>New</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12345</td>
                                            <td>2010 BMW M6</td>
                                            <td>5</td>
                                            <td>10-02-2019</td>
                                            <td>New</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#34265</td>
                                            <td>2014 Ford F-150 Lariat</td>
                                            <td>9</td>
                                            <td>30-12-2019</td>
                                            <td>Old</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#15548</td>
                                            <td>2016 Ford Edge Titanium</td>
                                            <td>8</td>
                                            <td>12-12-2019</td>
                                            <td>New</td>
                                            <td>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 mb-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Page views</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-right">
                                <span class="mr-3"
                                    ><i
                                        class="fa fa-square pr-1 text-primary"
                                    ></i>
                                    User</span
                                >
                                <span
                                    ><i class="fa fa-square pr-1 text-info"></i>
                                    Page view</span
                                >
                            </div>
                            <div
                                class="apexchart-wrapper"
                                style="position: relative"
                            >
                                <div
                                    id="cardealerdemo3"
                                    style="min-height: 365px"
                                >
                                    <div
                                        id="apexchartsud3ypipm"
                                        class="apexcharts-canvas apexchartsud3ypipm light"
                                        style="width: 694px; height: 350px"
                                    >
                                        <svg
                                            id="SvgjsSvg1649"
                                            width="694"
                                            height="350"
                                            xmlns="http://www.w3.org/2000/svg"
                                            version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs"
                                            class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)"
                                            style="background: transparent"
                                        >
                                            <g
                                                id="SvgjsG1651"
                                                class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(49.25, 30)"
                                            >
                                                <defs id="SvgjsDefs1650">
                                                    <clipPath
                                                        id="gridRectMaskud3ypipm"
                                                    >
                                                        <rect
                                                            id="SvgjsRect1656"
                                                            width="631.078125"
                                                            height="282.348"
                                                            x="-2.5"
                                                            y="-2.5"
                                                            rx="0"
                                                            ry="0"
                                                            fill="#ffffff"
                                                            opacity="1"
                                                            stroke-width="0"
                                                            stroke="none"
                                                            stroke-dasharray="0"
                                                        ></rect>
                                                    </clipPath>
                                                    <clipPath
                                                        id="gridRectMarkerMaskud3ypipm"
                                                    >
                                                        <rect
                                                            id="SvgjsRect1657"
                                                            width="640.078125"
                                                            height="291.348"
                                                            x="-7"
                                                            y="-7"
                                                            rx="0"
                                                            ry="0"
                                                            fill="#ffffff"
                                                            opacity="1"
                                                            stroke-width="0"
                                                            stroke="none"
                                                            stroke-dasharray="0"
                                                        ></rect>
                                                    </clipPath>
                                                </defs>
                                                <line
                                                    id="SvgjsLine1655"
                                                    x1="521.2317708333334"
                                                    y1="0"
                                                    x2="521.2317708333334"
                                                    y2="277.348"
                                                    stroke="#b6b6b6"
                                                    stroke-dasharray="3"
                                                    class="apexcharts-xcrosshairs"
                                                    x="521.2317708333334"
                                                    y="0"
                                                    width="1"
                                                    height="277.348"
                                                    fill="#b1b9c4"
                                                    filter="none"
                                                    fill-opacity="0.9"
                                                    stroke-width="1"
                                                ></line>
                                                <g
                                                    id="SvgjsG1734"
                                                    class="apexcharts-xaxis"
                                                    transform="translate(0, 0)"
                                                >
                                                    <g
                                                        id="SvgjsG1735"
                                                        class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"
                                                    >
                                                        <text
                                                            id="SvgjsText1736"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="0"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1737"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Jan
                                                            </tspan>
                                                            <title>Jan</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1738"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="104.34635416666666"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1739"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Feb
                                                            </tspan>
                                                            <title>Feb</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1740"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="208.69270833333334"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1741"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Mar
                                                            </tspan>
                                                            <title>Mar</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1742"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="313.03906250000006"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1743"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Apr
                                                            </tspan>
                                                            <title>Apr</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1744"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="417.38541666666674"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1745"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                May
                                                            </tspan>
                                                            <title>May</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1746"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="521.7317708333334"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1747"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Jun
                                                            </tspan>
                                                            <title>Jun</title>
                                                        </text>
                                                        <text
                                                            id="SvgjsText1748"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="626.078125"
                                                            y="306.348"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto"
                                                            font-size="12px"
                                                            fill="#373d3f"
                                                            class="apexcharts-xaxis-label"
                                                            style="
                                                                font-family: Helvetica,
                                                                    Arial,
                                                                    sans-serif;
                                                            "
                                                        >
                                                            <tspan
                                                                id="SvgjsTspan1749"
                                                                style="
                                                                    font-family: Helvetica,
                                                                        Arial,
                                                                        sans-serif;
                                                                "
                                                            >
                                                                Jul
                                                            </tspan>
                                                            <title>Jul</title>
                                                        </text>
                                                    </g>
                                                    <line
                                                        id="SvgjsLine1750"
                                                        x1="0"
                                                        y1="278.348"
                                                        x2="626.078125"
                                                        y2="278.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        stroke-width="1"
                                                    ></line>
                                                </g>
                                                <g
                                                    id="SvgjsG1764"
                                                    class="apexcharts-grid"
                                                >
                                                    <g
                                                        id="SvgjsG1765"
                                                        class="apexcharts-gridlines-horizontal"
                                                    >
                                                        <line
                                                            id="SvgjsLine1772"
                                                            x1="0"
                                                            y1="0"
                                                            x2="626.078125"
                                                            y2="0"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1773"
                                                            x1="0"
                                                            y1="27.7348"
                                                            x2="626.078125"
                                                            y2="27.7348"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1774"
                                                            x1="0"
                                                            y1="55.4696"
                                                            x2="626.078125"
                                                            y2="55.4696"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1775"
                                                            x1="0"
                                                            y1="83.20439999999999"
                                                            x2="626.078125"
                                                            y2="83.20439999999999"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1776"
                                                            x1="0"
                                                            y1="110.9392"
                                                            x2="626.078125"
                                                            y2="110.9392"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1777"
                                                            x1="0"
                                                            y1="138.674"
                                                            x2="626.078125"
                                                            y2="138.674"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1778"
                                                            x1="0"
                                                            y1="166.4088"
                                                            x2="626.078125"
                                                            y2="166.4088"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1779"
                                                            x1="0"
                                                            y1="194.14360000000002"
                                                            x2="626.078125"
                                                            y2="194.14360000000002"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1780"
                                                            x1="0"
                                                            y1="221.87840000000003"
                                                            x2="626.078125"
                                                            y2="221.87840000000003"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1781"
                                                            x1="0"
                                                            y1="249.61320000000003"
                                                            x2="626.078125"
                                                            y2="249.61320000000003"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                        <line
                                                            id="SvgjsLine1782"
                                                            x1="0"
                                                            y1="277.348"
                                                            x2="626.078125"
                                                            y2="277.348"
                                                            stroke="#dee0ea"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-gridline"
                                                        ></line>
                                                    </g>
                                                    <g
                                                        id="SvgjsG1766"
                                                        class="apexcharts-gridlines-vertical"
                                                    ></g>
                                                    <line
                                                        id="SvgjsLine1767"
                                                        x1="104.34635416666667"
                                                        y1="278.348"
                                                        x2="104.34635416666667"
                                                        y2="284.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1768"
                                                        x1="208.69270833333334"
                                                        y1="278.348"
                                                        x2="208.69270833333334"
                                                        y2="284.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1769"
                                                        x1="313.0390625"
                                                        y1="278.348"
                                                        x2="313.0390625"
                                                        y2="284.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1770"
                                                        x1="417.3854166666667"
                                                        y1="278.348"
                                                        x2="417.3854166666667"
                                                        y2="284.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1771"
                                                        x1="521.7317708333334"
                                                        y1="278.348"
                                                        x2="521.7317708333334"
                                                        y2="284.348"
                                                        stroke="#78909c"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"
                                                    ></line>
                                                    <rect
                                                        id="SvgjsRect1783"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="0"
                                                        rx="0"
                                                        ry="0"
                                                        fill="#f3f3f3"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1784"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="27.7348"
                                                        rx="0"
                                                        ry="0"
                                                        fill="transparent"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1785"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="55.4696"
                                                        rx="0"
                                                        ry="0"
                                                        fill="#f3f3f3"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1786"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="83.20439999999999"
                                                        rx="0"
                                                        ry="0"
                                                        fill="transparent"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1787"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="110.9392"
                                                        rx="0"
                                                        ry="0"
                                                        fill="#f3f3f3"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1788"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="138.674"
                                                        rx="0"
                                                        ry="0"
                                                        fill="transparent"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1789"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="166.4088"
                                                        rx="0"
                                                        ry="0"
                                                        fill="#f3f3f3"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1790"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="194.14360000000002"
                                                        rx="0"
                                                        ry="0"
                                                        fill="transparent"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1791"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="221.87840000000003"
                                                        rx="0"
                                                        ry="0"
                                                        fill="#f3f3f3"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <rect
                                                        id="SvgjsRect1792"
                                                        width="626.078125"
                                                        height="27.7348"
                                                        x="0"
                                                        y="249.61320000000003"
                                                        rx="0"
                                                        ry="0"
                                                        fill="transparent"
                                                        opacity="0.5"
                                                        stroke-width="0"
                                                        stroke="none"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-gridRow"
                                                    ></rect>
                                                    <line
                                                        id="SvgjsLine1794"
                                                        x1="0"
                                                        y1="277.348"
                                                        x2="626.078125"
                                                        y2="277.348"
                                                        stroke="transparent"
                                                        stroke-dasharray="0"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1793"
                                                        x1="0"
                                                        y1="1"
                                                        x2="0"
                                                        y2="277.348"
                                                        stroke="transparent"
                                                        stroke-dasharray="0"
                                                    ></line>
                                                </g>
                                                <g
                                                    id="SvgjsG1659"
                                                    class="apexcharts-line-series apexcharts-plot-series"
                                                >
                                                    <g
                                                        id="SvgjsG1697"
                                                        class="apexcharts-series"
                                                        seriesName="PagexViewxxx208"
                                                        data:longestSeries="true"
                                                        rel="2"
                                                        data:realIndex="1"
                                                    >
                                                        <path
                                                            id="apexcharts-line-1"
                                                            d="M 0 221.8784C 36.52122395833333 221.8784 67.82513020833335 229.80262857142856 104.34635416666667 229.80262857142856C 140.867578125 229.80262857142856 172.171484375 206.02994285714286 208.69270833333334 206.02994285714286C 245.21393229166668 206.02994285714286 276.51783854166666 174.33302857142857 313.0390625 174.33302857142857C 349.56028645833334 174.33302857142857 380.86419270833335 182.25725714285713 417.3854166666667 182.25725714285713C 453.906640625 182.25725714285713 485.21054687500003 213.95417142857144 521.7317708333334 213.95417142857144C 558.2529947916667 213.95417142857144 589.5569010416667 213.95417142857144 626.078125 213.95417142857144"
                                                            fill="none"
                                                            fill-opacity="1"
                                                            stroke="rgba(71,118,230,0.85)"
                                                            stroke-opacity="1"
                                                            stroke-linecap="butt"
                                                            stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-line"
                                                            index="1"
                                                            clip-path="url(#gridRectMaskud3ypipm)"
                                                            pathTo="M 0 221.8784C 36.52122395833333 221.8784 67.82513020833335 229.80262857142856 104.34635416666667 229.80262857142856C 140.867578125 229.80262857142856 172.171484375 206.02994285714286 208.69270833333334 206.02994285714286C 245.21393229166668 206.02994285714286 276.51783854166666 174.33302857142857 313.0390625 174.33302857142857C 349.56028645833334 174.33302857142857 380.86419270833335 182.25725714285713 417.3854166666667 182.25725714285713C 453.906640625 182.25725714285713 485.21054687500003 213.95417142857144 521.7317708333334 213.95417142857144C 558.2529947916667 213.95417142857144 589.5569010416667 213.95417142857144 626.078125 213.95417142857144"
                                                            pathFrom="M -1 316.96914285714286L -1 316.96914285714286L 104.34635416666667 316.96914285714286L 208.69270833333334 316.96914285714286L 313.0390625 316.96914285714286L 417.3854166666667 316.96914285714286L 521.7317708333334 316.96914285714286L 626.078125 316.96914285714286"
                                                        ></path>
                                                        <g
                                                            id="SvgjsG1698"
                                                            class="apexcharts-series-markers-wrap"
                                                        >
                                                            <g
                                                                id="SvgjsG1700"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1701"
                                                                    r="6"
                                                                    cx="0"
                                                                    cy="221.8784"
                                                                    class="apexcharts-marker no-pointer-events wdmo59xm0i"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="0"
                                                                    j="0"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                                <circle
                                                                    id="SvgjsCircle1702"
                                                                    r="6"
                                                                    cx="104.34635416666667"
                                                                    cy="229.80262857142856"
                                                                    class="apexcharts-marker no-pointer-events wimgsux3l"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="1"
                                                                    j="1"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1708"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1709"
                                                                    r="6"
                                                                    cx="208.69270833333334"
                                                                    cy="206.02994285714286"
                                                                    class="apexcharts-marker no-pointer-events wqidfv7v"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="2"
                                                                    j="2"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1713"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1714"
                                                                    r="6"
                                                                    cx="313.0390625"
                                                                    cy="174.33302857142857"
                                                                    class="apexcharts-marker no-pointer-events wqtv0mk1z"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="3"
                                                                    j="3"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1718"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1719"
                                                                    r="6"
                                                                    cx="417.3854166666667"
                                                                    cy="182.25725714285713"
                                                                    class="apexcharts-marker no-pointer-events wdmay9exfl"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="4"
                                                                    j="4"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1723"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1724"
                                                                    r="6"
                                                                    cx="521.7317708333334"
                                                                    cy="213.95417142857144"
                                                                    class="apexcharts-marker no-pointer-events w7j9qctgm"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="5"
                                                                    j="5"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1728"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1729"
                                                                    r="6"
                                                                    cx="626.078125"
                                                                    cy="213.95417142857144"
                                                                    class="apexcharts-marker no-pointer-events wr85gkubc"
                                                                    stroke="#ffffff"
                                                                    fill="#4776e6"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="6"
                                                                    j="6"
                                                                    index="1"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                        </g>
                                                        <g
                                                            id="SvgjsG1699"
                                                            class="apexcharts-datalabels"
                                                        >
                                                            <g
                                                                id="SvgjsG1703"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1705"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0"
                                                                    y="239.6784"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="0"
                                                                    cy="239.6784"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    12
                                                                </text>
                                                                <text
                                                                    id="SvgjsText1707"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="104.34635416666667"
                                                                    y="247.60262857142857"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="104.34635416666667"
                                                                    cy="247.60262857142857"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    11
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1710"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1712"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="208.69270833333334"
                                                                    y="195.02994285714286"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="208.69270833333334"
                                                                    cy="195.02994285714286"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    14
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1715"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1717"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="313.0390625"
                                                                    y="163.33302857142857"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="313.0390625"
                                                                    cy="163.33302857142857"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    18
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1720"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1722"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="417.3854166666667"
                                                                    y="200.0572571428571"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="417.3854166666667"
                                                                    cy="200.0572571428571"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    17
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1725"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1727"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="521.7317708333334"
                                                                    y="231.75417142857145"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="521.7317708333334"
                                                                    cy="231.75417142857145"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    13
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1730"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1732"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="626.078125"
                                                                    y="231.75417142857145"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#4776e6"
                                                                    class="apexcharts-datalabel"
                                                                    cx="626.078125"
                                                                    cy="231.75417142857145"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    13
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g
                                                        id="SvgjsG1660"
                                                        class="apexcharts-series"
                                                        seriesName="Userxxx208"
                                                        data:longestSeries="true"
                                                        rel="1"
                                                        data:realIndex="0"
                                                    >
                                                        <path
                                                            id="apexcharts-line-0"
                                                            d="M 0 95.09074285714286C 36.52122395833333 95.09074285714286 67.82513020833335 87.16651428571427 104.34635416666667 87.16651428571427C 140.867578125 87.16651428571427 172.171484375 55.469600000000014 208.69270833333334 55.469600000000014C 245.21393229166668 55.469600000000014 276.51783854166666 31.696914285714286 313.0390625 31.696914285714286C 349.56028645833334 31.696914285714286 380.86419270833335 63.39382857142857 417.3854166666667 63.39382857142857C 453.906640625 63.39382857142857 485.21054687500003 63.39382857142857 521.7317708333334 63.39382857142857C 558.2529947916667 63.39382857142857 589.5569010416667 55.469600000000014 626.078125 55.469600000000014"
                                                            fill="none"
                                                            fill-opacity="1"
                                                            stroke="rgba(142,84,233,0.85)"
                                                            stroke-opacity="1"
                                                            stroke-linecap="butt"
                                                            stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-line"
                                                            index="0"
                                                            clip-path="url(#gridRectMaskud3ypipm)"
                                                            pathTo="M 0 95.09074285714286C 36.52122395833333 95.09074285714286 67.82513020833335 87.16651428571427 104.34635416666667 87.16651428571427C 140.867578125 87.16651428571427 172.171484375 55.469600000000014 208.69270833333334 55.469600000000014C 245.21393229166668 55.469600000000014 276.51783854166666 31.696914285714286 313.0390625 31.696914285714286C 349.56028645833334 31.696914285714286 380.86419270833335 63.39382857142857 417.3854166666667 63.39382857142857C 453.906640625 63.39382857142857 485.21054687500003 63.39382857142857 521.7317708333334 63.39382857142857C 558.2529947916667 63.39382857142857 589.5569010416667 55.469600000000014 626.078125 55.469600000000014"
                                                            pathFrom="M -1 316.96914285714286L -1 316.96914285714286L 104.34635416666667 316.96914285714286L 208.69270833333334 316.96914285714286L 313.0390625 316.96914285714286L 417.3854166666667 316.96914285714286L 521.7317708333334 316.96914285714286L 626.078125 316.96914285714286"
                                                        ></path>
                                                        <g
                                                            id="SvgjsG1661"
                                                            class="apexcharts-series-markers-wrap"
                                                        >
                                                            <g
                                                                id="SvgjsG1663"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1664"
                                                                    r="6"
                                                                    cx="0"
                                                                    cy="95.09074285714286"
                                                                    class="apexcharts-marker no-pointer-events wh7uk92id"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="0"
                                                                    j="0"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                                <circle
                                                                    id="SvgjsCircle1665"
                                                                    r="6"
                                                                    cx="104.34635416666667"
                                                                    cy="87.16651428571427"
                                                                    class="apexcharts-marker no-pointer-events wsqa69894"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="1"
                                                                    j="1"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1671"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1672"
                                                                    r="6"
                                                                    cx="208.69270833333334"
                                                                    cy="55.469600000000014"
                                                                    class="apexcharts-marker no-pointer-events wo0k2rr8l"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="2"
                                                                    j="2"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1676"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1677"
                                                                    r="6"
                                                                    cx="313.0390625"
                                                                    cy="31.696914285714286"
                                                                    class="apexcharts-marker no-pointer-events wjbjh831q"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="3"
                                                                    j="3"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1681"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1682"
                                                                    r="6"
                                                                    cx="417.3854166666667"
                                                                    cy="63.39382857142857"
                                                                    class="apexcharts-marker no-pointer-events wg8i3mzgc"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="4"
                                                                    j="4"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1686"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1687"
                                                                    r="6"
                                                                    cx="521.7317708333334"
                                                                    cy="63.39382857142857"
                                                                    class="apexcharts-marker no-pointer-events w7oaivkycl"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="5"
                                                                    j="5"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1691"
                                                                class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <circle
                                                                    id="SvgjsCircle1692"
                                                                    r="6"
                                                                    cx="626.078125"
                                                                    cy="55.469600000000014"
                                                                    class="apexcharts-marker no-pointer-events w29mshx1o"
                                                                    stroke="#ffffff"
                                                                    fill="#8e54e9"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="0.9"
                                                                    rel="6"
                                                                    j="6"
                                                                    index="0"
                                                                    default-marker-size="6"
                                                                ></circle>
                                                            </g>
                                                        </g>
                                                        <g
                                                            id="SvgjsG1662"
                                                            class="apexcharts-datalabels"
                                                        >
                                                            <g
                                                                id="SvgjsG1666"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1668"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0"
                                                                    y="84.09074285714286"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="0"
                                                                    cy="84.09074285714286"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    28
                                                                </text>
                                                                <text
                                                                    id="SvgjsText1670"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="104.34635416666667"
                                                                    y="76.16651428571427"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="104.34635416666667"
                                                                    cy="76.16651428571427"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    29
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1673"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1675"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="208.69270833333334"
                                                                    y="44.469600000000014"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="208.69270833333334"
                                                                    cy="44.469600000000014"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    33
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1678"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1680"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="313.0390625"
                                                                    y="20.696914285714286"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="313.0390625"
                                                                    cy="20.696914285714286"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    36
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1683"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1685"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="417.3854166666667"
                                                                    y="81.19382857142857"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="417.3854166666667"
                                                                    cy="81.19382857142857"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    32
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1688"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1690"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="521.7317708333334"
                                                                    y="81.19382857142857"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="521.7317708333334"
                                                                    cy="81.19382857142857"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    32
                                                                </text>
                                                            </g>
                                                            <g
                                                                id="SvgjsG1693"
                                                                class="apexcharts-data-labels"
                                                                clip-path="url(#gridRectMarkerMaskud3ypipm)"
                                                            >
                                                                <text
                                                                    id="SvgjsText1695"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="626.078125"
                                                                    y="44.469600000000014"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    fill="#8e54e9"
                                                                    class="apexcharts-datalabel"
                                                                    cx="626.078125"
                                                                    cy="44.469600000000014"
                                                                    style="
                                                                        font-family: Helvetica,
                                                                            Arial,
                                                                            sans-serif;
                                                                    "
                                                                >
                                                                    33
                                                                </text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line
                                                    id="SvgjsLine1795"
                                                    x1="0"
                                                    y1="0"
                                                    x2="626.078125"
                                                    y2="0"
                                                    stroke="#b6b6b6"
                                                    stroke-dasharray="0"
                                                    stroke-width="1"
                                                    class="apexcharts-ycrosshairs"
                                                ></line>
                                                <line
                                                    id="SvgjsLine1796"
                                                    x1="0"
                                                    y1="0"
                                                    x2="626.078125"
                                                    y2="0"
                                                    stroke-dasharray="0"
                                                    stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"
                                                ></line>
                                                <g
                                                    id="SvgjsG1797"
                                                    class="apexcharts-yaxis-annotations"
                                                ></g>
                                                <g
                                                    id="SvgjsG1798"
                                                    class="apexcharts-xaxis-annotations"
                                                ></g>
                                                <g
                                                    id="SvgjsG1799"
                                                    class="apexcharts-point-annotations"
                                                ></g>
                                            </g>
                                            <rect
                                                id="SvgjsRect1654"
                                                width="0"
                                                height="0"
                                                x="0"
                                                y="0"
                                                rx="0"
                                                ry="0"
                                                fill="#fefefe"
                                                opacity="1"
                                                stroke-width="0"
                                                stroke="none"
                                                stroke-dasharray="0"
                                            ></rect>
                                            <g
                                                id="SvgjsG1751"
                                                class="apexcharts-yaxis"
                                                rel="0"
                                                transform="translate(16.25, 0)"
                                            >
                                                <g
                                                    id="SvgjsG1752"
                                                    class="apexcharts-yaxis-texts-g"
                                                >
                                                    <text
                                                        id="SvgjsText1753"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="32"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        40
                                                    </text>
                                                    <text
                                                        id="SvgjsText1754"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="59.8348"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        37
                                                    </text>
                                                    <text
                                                        id="SvgjsText1755"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="87.6696"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        33
                                                    </text>
                                                    <text
                                                        id="SvgjsText1756"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="115.5044"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        30
                                                    </text>
                                                    <text
                                                        id="SvgjsText1757"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="143.3392"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        26
                                                    </text>
                                                    <text
                                                        id="SvgjsText1758"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="171.174"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        23
                                                    </text>
                                                    <text
                                                        id="SvgjsText1759"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="199.0088"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        19
                                                    </text>
                                                    <text
                                                        id="SvgjsText1760"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="226.8436"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        16
                                                    </text>
                                                    <text
                                                        id="SvgjsText1761"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="254.6784"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        12
                                                    </text>
                                                    <text
                                                        id="SvgjsText1762"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="282.5132"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        9
                                                    </text>
                                                    <text
                                                        id="SvgjsText1763"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="20"
                                                        y="310.34799999999996"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="11px"
                                                        fill="#373d3f"
                                                        class="apexcharts-yaxis-label"
                                                        style="
                                                            font-family: Helvetica,
                                                                Arial,
                                                                sans-serif;
                                                        "
                                                    >
                                                        5
                                                    </text>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div
                                            class="apexcharts-tooltip light"
                                            style="left: 403.375px; top: 69px"
                                        >
                                            <div
                                                class="apexcharts-tooltip-title"
                                                style="
                                                    font-family: Helvetica,
                                                        Arial, sans-serif;
                                                    font-size: 12px;
                                                "
                                            >
                                                Jun
                                            </div>
                                            <div
                                                class="apexcharts-tooltip-series-group active"
                                                style="display: flex"
                                            >
                                                <span
                                                    class="apexcharts-tooltip-marker"
                                                    style="
                                                        background-color: rgb(
                                                            142,
                                                            84,
                                                            233
                                                        );
                                                    "
                                                ></span>
                                                <div
                                                    class="apexcharts-tooltip-text"
                                                    style="
                                                        font-family: Helvetica,
                                                            Arial, sans-serif;
                                                        font-size: 12px;
                                                    "
                                                >
                                                    <div
                                                        class="apexcharts-tooltip-y-group"
                                                    >
                                                        <span
                                                            class="apexcharts-tooltip-text-label"
                                                            >User - 208: </span
                                                        ><span
                                                            class="apexcharts-tooltip-text-value"
                                                            >32</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="apexcharts-tooltip-z-group"
                                                    >
                                                        <span
                                                            class="apexcharts-tooltip-text-z-label"
                                                        ></span
                                                        ><span
                                                            class="apexcharts-tooltip-text-z-value"
                                                        ></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-tooltip-series-group active"
                                                style="display: flex"
                                            >
                                                <span
                                                    class="apexcharts-tooltip-marker"
                                                    style="
                                                        background-color: rgb(
                                                            71,
                                                            118,
                                                            230
                                                        );
                                                    "
                                                ></span>
                                                <div
                                                    class="apexcharts-tooltip-text"
                                                    style="
                                                        font-family: Helvetica,
                                                            Arial, sans-serif;
                                                        font-size: 12px;
                                                    "
                                                >
                                                    <div
                                                        class="apexcharts-tooltip-y-group"
                                                    >
                                                        <span
                                                            class="apexcharts-tooltip-text-label"
                                                            >Page View - 208: </span
                                                        ><span
                                                            class="apexcharts-tooltip-text-value"
                                                            >13</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="apexcharts-tooltip-z-group"
                                                    >
                                                        <span
                                                            class="apexcharts-tooltip-text-z-label"
                                                        ></span
                                                        ><span
                                                            class="apexcharts-tooltip-text-z-value"
                                                        ></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light"
                                            style="
                                                left: 548.193px;
                                                top: 309.348px;
                                            "
                                        >
                                            <div
                                                class="apexcharts-xaxistooltip-text"
                                                style="
                                                    font-family: Helvetica,
                                                        Arial, sans-serif;
                                                    font-size: 12px;
                                                    min-width: 22.5781px;
                                                "
                                            >
                                                Jun
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div
                                            style="width: 695px; height: 366px"
                                        ></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import sidebar from "../components/SideNav.vue";
import TopNav from "../components/TopNav.vue";
export default {
    components: { sidebar, TopNav },
};
</script>

<style></style>
