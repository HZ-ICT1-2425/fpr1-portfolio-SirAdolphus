<x-layout.main>

<table class="dashBorder">
    <tr class="dashtb">
        <th class="dashtb">Quarter</th>
        <th class="dashtb">Course</th>
        <th class="dashtb">Exams</th>
        <th class="dashtb">Grades</th>
        <th class="dashtb">EC's</th>
    </tr>
    <tr class="dashtb">
        <th rowspan="3" class="dashtb">1</th>
        <td class="dashtb">PCO</td>
        <td class="dashtb">Assessment website</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">2,5</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">CSB</td>
        <td class="dashtb">Written Exam</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">5</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">PBA</td>
        <td class="dashtb">Case Study Exam</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">5</td>
    </tr>
    <tr class="dashtb">
        <th rowspan="2" class="dashtb">2</th>
        <td class="dashtb">PPD-E</td>
        <td class="dashtb">PPD-E Exam</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">12,5</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">OOP</td>
        <td class="dashtb">OOP Exam</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">10</td>
    </tr>
    <th rowspan="2" class="dashtb">3</th>
    <td class="dashtb">Framework-project 1</td>
    <td class="dashtb">Presentation (with group)</td>
    <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
    <td class="dashtb">10</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">Business IT consultancy basics</td>
        <td class="dashtb">Presentation (with group) </td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb"> 1,25 </td>
    </tr>
    <th rowspan="3" class="dashtb">4</th>
    <td class="dashtb">Framework-project 2</td>
    <td class="dashtb">Portfolio</td>
    <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
    <td class="dashtb">10</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">Business IT consultancy basics </td>
        <td class="dashtb">Portfolio</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">1,25</td>
    </tr>
    <tr class="dashtb">
        <td class="dashtb">IT personality</td>
        <td class="dashtb">Fill in on your own</td>
        <td class="dashtb"><input class="Mygrade" type="number" step="0.1" min="0" max="10"></input></td>
        <td class="dashtb">2.5</td>
    </tr>
</table>





<h1>EC's gained out of 60.</h1>
<div class="wrapper">
    <div class="progress-bar">
        <span class="progress-bar-fill" style="width: 0;"></span>
    </div>
    <div class="progress-text"></div>
</div>

<!--javascript stuk-->
<script src="js/progressbar.js"></script>


</x-layout.main>
