var chessBoard;
var baseUrl = 'http://localhost:806';
var x = new Image();
var p = new Image();
var m = new Image();
var c = new Image();
var s = new Image();
var t = new Image();
var g = new Image();
var X = new Image();
var P = new Image();
var M = new Image();
var C = new Image();
var S = new Image();
var T = new Image();
var G = new Image();
var oldStep = new Image();
var currentStep = new Image();
var hiddenRed = new Image();
var hiddenBlue = new Image();
var backgroundImg = new Image();
var h = new Image();
var H = new Image();
var moveIndex = 0;
var previousMoves = [];
var currentPositions = [];
var canvasId;
var iframeId;
var oldPosition = [];
var initialChessBoard = [['X', 'M', 'T', 'S', 'Tg', 'S', 'T', 'M', 'X'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', 'P', '0', '0', '0', '0', '0', 'P', '0'], ['B', '0', 'B', '0', 'B', '0', 'B', '0', 'B'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['B', '0', 'B', '0', 'B', '0', 'B', '0', 'B'], ['0', 'P', '0', '0', '0', '0', '0', 'P', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['X', 'M', 'T', 'S', 'Tg', 'S', 'T', 'M', 'X']];
var initialChessBoard2 = [['x', 'm', 't', 's', 'g', 's', 't', 'm', 'x'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', 'p', '0', '0', '0', '0', '0', 'p', '0'], ['b', '0', 'b', '0', 'b', '0', 'b', '0', 'b'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['B', '0', 'B', '0', 'B', '0', 'B', '0', 'B'], ['0', 'P', '0', '0', '0', '0', '0', 'P', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['X', 'M', 'T', 'S', 'G', 'S', 'T', 'M', 'X']];
var isNormal = 0;

var parameters = getUrlVars(); //which leads to:
iframeId = parameters['id']; //Writes 'value1' to console
isNormal = parameters['isNormal'];
canvasId = "gameBoard" + Math.floor((Math.random() * 100000) + 1).toString();
forwardId = "forward" + Math.floor((Math.random() * 100000) + 1).toString();
backwardId = "backward" + Math.floor((Math.random() * 100000) + 1).toString();
document.write('<div><canvas id="' + canvasId + '" width="449" height="487" style=" position: relative;z-index:20;float:left;margin-left:300px;"></canvas><div id ="moveList" style="overflow-y:auto;width: 200px;height: 487px;margin-left: 10px;float: left;border: 1px solid black;"></div></div><div style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;margin-top:5px;"><button style="cursor: pointer;"  id ="' + forwardId + '">forward</button><button style="cursor: pointer;" id="' + backwardId + '">backward</button></div>');
var canvas = document.getElementById(canvasId);
var context = canvas.getContext("2d");
initChessBoard();
var iframe = $('#myIframe' + iframeId, parent.document.body);
//var type = parseInt(iframe.attr('data-type'));
var type = 0;
//var init = iframe.attr('data-init');
//var init = "phxsghsxh-9-1t5c1-m1c1t1c1p-9-9-T1H1P1H1C-1C5M1-9-CHSCGXXPH-83847987848769877082777382837385727506052324464520428777758586856364594843444858304145426042171000102947442605270304090410193948831358551909495913195958090847381989551512327747425347462644155589394636534255543254";
var init = "phxsghsxh-9-1t5c1-m1c1t1c1p-9-9-T1H1P1H1C-1C5M1-9-CHSCGXXPH-83847987848769877082777382837385727506052324464520428777758586856364594843444858304145426042171000102947442605270304090410193948831358551909495913195958090847381989551512327747425347462644155589394636534255543254";
var moveList;
var loaded = 0;
var loaded2 = 0;
var position = '';
if (type == 0) {
    var dataInit = init.split('-');
    
    position = dataInit.slice(0, 10);
    
    console.log(position);
    
    moveList = dataInit[10].match(/.{1,4}/g);
    
    loaded2 = 1;
    initialize(loaded, loaded2, context, position, moveList);
}
else if (type == 1) {
    moveList = '';
    var newChessBoard = [];
    for (var i = 0; i < initialChessBoard2.length; i++)
        newChessBoard[i] = initialChessBoard2[i].slice();
    var exportChessBoard = [];
    for (var i = 0; i < chessBoard.length; ++i)
        exportChessBoard[i] = chessBoard[i].slice();
    var dataInit = init.split(' ');
    for (i = 0; i < dataInit.length; ++i) {
        var x1;
        var x2;
        var y1;
        var y2;
        var first = dataInit[i].split('_')[0];
        var move = parseInt(first.match(/(\.|\/|-)[0-9]/g)[0][1]);
        var col = parseInt(first.match(/[0-9](\.|\/|-)/g)[0][0] - 1);
        var moveType = first.match(/(\.|\/|-)/g)[0];

        if (i % 2 == 0) {
            y1 = col;
            var chess = first.match(/[A-Za-z]+/g)[0].replace('Tg', 'G').toLowerCase();
            if (chess.indexOf('t') > 0 || chess == 'tt') {
                chess = chess[0];
                for (j = 9; j >= 0; --j) {
                    if (newChessBoard[j][col] == chess)
                    {
                        x1 = j;
                        break;
                    }
                }
            }
            else {
                for (j = 0; j < 10; ++j) {
                    if (newChessBoard[j][col] == chess) {
                        x1 = j;
                        break;
                    }
                }
            }
            if (chess == 'x' || chess == 'p' || chess == 'b' || chess == 'g') {
                if (moveType == '.') {
                    y2 = y1;
                    x2 = x1 + move;
                }
                else if (moveType == '/') {
                    y2 = y1;
                    x2 = x1 - move;
                }
                else {
                    x2 = x1;
                    y2 = move - 1;
                }
            }
            else if (chess == 't') {
                if (moveType == '.') {
                    y2 = move - 1;
                    x2 = x1 + 2;
                }
                else {
                    y2 = move - 1;
                    x2 = x1 - 2;
                }
            }
            else if (chess == 's') {
                if (moveType == '.') {
                    y2 = move - 1;
                    x2 = x1 + 1;
                }
                else {
                    y2 = move - 1;
                    x2 = x1 + 1;
                }
            }
            else if (chess == 'm') {
                if (moveType == '.') {
                    y2 = move - 1;
                    x2 = x1 + 3 - Math.abs(y2 - y1);
                }
                else {
                    y2 = move - 1;
                    x2 = x1 - 3 + Math.abs(y2 - y1);
                }
            }
            if (dataInit[i].indexOf('_') != -1) {
                var second = dataInit[i].split('_')[1];
                var become = second[0].toLowerCase();
                newChessBoard[x1][y1] = '0';
                exportChessBoard[x1][y1] = become;
                newChessBoard[x2][y2] = become;
            }
            else {
                newChessBoard[x2][y2] = newChessBoard[x1][y1];
                newChessBoard[x1][y1] = '0';
            }
        }
        else {
            y1 = 8 - col;
            var chess = first.match(/[A-Za-z]+/g)[0].replace('Tg', 'G');
            if (chess.indexOf('T') > 0 || chess == 'TT') {
                chess = chess[0];
                for (j = 0; j < 10; ++j) {
                    if (newChessBoard[j][y1] == chess) {
                        x1 = j;
                        break;
                    }
                }
            }
            else {
                for (j = 9; j >= 0; --j) {
                    if (newChessBoard[j][y1] == chess) {
                        x1 = j;
                        break;
                    }
                }
            }
            if (chess == 'X' || chess == 'P' || chess == 'B' || chess == 'G') {
                if (moveType == '.') {
                    y2 = y1;
                    x2 = x1 - move;
                }
                else if (moveType == '/') {
                    y2 = y1;
                    x2 = x1 + move;
                }
                else {
                    x2 = x1;
                    y2 = 9 - move;
                }
            }
            else if (chess == 'T') {
                if (moveType == '.') {
                    y2 = 9 - move;
                    x2 = x1 - 2;
                }
                else {
                    y2 = 9 - move;
                    x2 = x1 + 2;
                }
            }
            else if (chess == 'S') {
                if (moveType == '.') {
                    y2 = 9 - move;
                    x2 = x1 - 1;
                }
                else {
                    y2 = 9 - move;
                    x2 = x1 + 1;
                }
            }
            else if (chess == 'M') {
                if (moveType == '.') {
                    y2 = 9 - move;
                    x2 = x1 - 3 + Math.abs(y2 - y1);
                }
                else {
                    y2 = 9 - move;
                    x2 = x1 + 3 - Math.abs(y2 - y1);
                }
            }
            if (dataInit[i].indexOf('_') != -1) {
                var second = dataInit[i].split('_')[1];
                var become = second[0];
                newChessBoard[x1][y1] = '0';
                exportChessBoard[x1][y1] = become;
                newChessBoard[x2][y2] = become;
            }
            else {
                newChessBoard[x2][y2] = newChessBoard[x1][y1];
                newChessBoard[x1][y1] = '0';
            }
        }
        moveList += y1.toString() + x1.toString() + y2.toString() + x2.toString();
    }
    var res = '';
    exportChessBoard[0][4] = 'g';
    exportChessBoard[9][4] = 'G';
    for (i = 0; i < 10; ++i)
    {
        var n = 0;
        for (j = 0; j < 9; ++j)
        {
            if (exportChessBoard[i][j] == '0' && initialChessBoard2[i][j] == '0')
                n++;
            else if (exportChessBoard[i][j] == '0' && initialChessBoard2[i][j] != '0') {
                if (n != 0) {
                    res += n.toString();
                    n = 0;
                }
                if (initialChessBoard2[i][j] > 'a' && initialChessBoard2[i][j] < 'z')
                    res += 'h';
                else
                    res += 'H';
                if (j >= 8 && n > 0) {
                    res += n.toString();
                    n = 0;
                }
            }
            else
            {
                if (n != 0)
                {
                    res += n.toString();
                    n = 0;
                }
                if (exportChessBoard[i][j].indexOf('_') != -1)
                    res += exportChessBoard[i][j][1];
                else
                    res += exportChessBoard[i][j];
            }
            if (j >= 8)
            {
                if (n > 0)
                {
                    res += n.toString();
                    n = 0;
                }
            }
        }
        res += '-';
    }
    res = res.replace(/B/g, 'C');
    res = res.replace(/b/g, 'c');
    position = res.split('-').slice(0, 10);
    moveList = moveList.match(/.{1,4}/g);
    loaded2 = 1;
    initialize(loaded, loaded2, context, position, moveList);
}
else if (type == 2) {
    var url = 'http://cotuongup.com/data/game-history/' + iframe.attr('data-url').split('/').pop() + '.json';
    $.getJSON(url, function (data) {
        moveString = "";
        chessBoard = [['h', 'h', 'h', 'h', 'g', 'h', 'h', 'h', 'h'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', 'h', '0', '0', '0', '0', '0', 'h', '0'], ['h', '0', 'h', '0', 'h', '0', 'h', '0', 'h'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['H', '0', 'H', '0', 'H', '0', 'H', '0', 'H'], ['0', 'H', '0', '0', '0', '0', '0', 'H', '0'], ['0', '0', '0', '0', '0', '0', '0', '0', '0'], ['H', 'H', 'H', 'H', 'G', 'H', 'H', 'H', 'H']];
        data.forEach(function (move, index) {
            if (move.lastMove)
            {
                var posX1 = move.lastMove.step.col - 1;
                var posX2 = move.lastMove.step.nextCol - 1;
                var posY1 = move.lastMove.step.row - 1;
                var posY2 = move.lastMove.step.nextRow - 1;
                moveString += (posX1).toString() + (posY1).toString() + (posX2).toString() + (posY2).toString();

                if (move.lastMove.openChess)
                {
                    switch (move.lastMove.openChess.name) {
                        case 'redhorse':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_m';
                            else
                                chessBoard[posY1][posX1] = '_M';
                            break;
                        case 'redelephant':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_t';
                            else
                                chessBoard[posY1][posX1] = '_T';
                            break;
                        case 'redadvisor':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_s';
                            else
                                chessBoard[posY1][posX1] = '_S';
                            break;
                        case 'redcannon':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_p';
                            else
                                chessBoard[posY1][posX1] = '_P';
                            break;
                        case 'redsoldier':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_c';
                            else
                                chessBoard[posY1][posX1] = '_C';
                            break;
                        case 'redchariot':
                            if (move.lastMove.isHostTurn)
                                chessBoard[posY1][posX1] = '_x';
                            else
                                chessBoard[posY1][posX1] = '_X';
                            break;
                    }
                }
                if (move.lastMove.deletedChess)
                {
                    switch (move.lastMove.deletedChess.name) {
                        case 'bluehorse':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_m';
                            else
                                chessBoard[posY2][posX2] = '_M';
                            break;
                        case 'blueelephant':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_t';
                            else
                                chessBoard[posY2][posX2] = '_T';
                            break;
                        case 'blueadvisor':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_s';
                            else
                                chessBoard[posY2][posX2] = '_S';
                            break;
                        case 'bluecannon':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_p';
                            else
                                chessBoard[posY2][posX2] = '_P';
                            break;
                        case 'bluesoldier':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_c';
                            else
                                chessBoard[posY2][posX2] = '_C';
                            break;
                        case 'bluechariot':
                            if (!move.lastMove.isHostTurn)
                                chessBoard[posY2][posX2] = '_x';
                            else
                                chessBoard[posY2][posX2] = '_X';
                            break;

                    }
                }
            }
        });
        var res = '';
        for (i = 0; i < 10; ++i)
        {
            var n = 0;
            for (j = 0; j < 9; ++j)
            {
                if (chessBoard[i][j] == '0')
                    n++;
                else
                {
                    if (n != 0)
                    {
                        res += n.toString();
                        n = 0;
                    }
                    if (chessBoard[i][j].indexOf('_') != -1)
                        res += chessBoard[i][j][1];
                    else
                        res += chessBoard[i][j];
                }
                if (j >= 8)
                {
                    if (n > 0)
                    {
                        res += n.toString();
                        n = 0;
                    }
                }
            }
            res += '-';
        }
        res = res.replace(/B/g, 'C');
        res = res.replace(/b/g, 'c');
        position = res.split('-').slice(0, 10);
        moveList = moveString.match(/.{1,4}/g);
        moveList.pop();
        loaded2 = 1;
        initialize(loaded, loaded2, context, position, moveList);
    });

}
hiddenBlue.onload = hiddenRed.onload = backgroundImg.onload = g.onload = G.onload = function () {
    loaded++;
    if (loaded == 5)
    {
        $('#' + forwardId).click(function () {
            if (moveList.length <= moveIndex)
                return;
            $('#move' + (moveIndex - 1).toString()).css('background', 'initial');

            var a = moveList[moveIndex];
            var x1 = parseInt(a[0]);
            var y1 = parseInt(a[1]);
            var x2 = parseInt(a[2]);
            var y2 = parseInt(a[3]);
            var chess = chessBoard[y1][x1];
            var chessPrevious = chessBoard[y2][x2];
            if (chess.indexOf('_') != -1)
            {
                chessBoard[y1][x1] = '0';
                chessBoard[y2][x2] = chess[1];
            }
            else
            {
                chessBoard[y1][x1] = '0';
                chessBoard[y2][x2] = chess;
            }
            if (currentPositions.length > 0) {
                currentPosition = currentPositions[currentPositions.length - 1];
                context.drawImage(backgroundImg, 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2], 46, 46, 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2], 46, 46);
                drawChess(context, currentPosition[0], 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2]);
            }

            if (oldPosition.length > 0) {
                var oldX = oldPosition[oldPosition.length - 1][0];
                var oldY = oldPosition[oldPosition.length - 1][1];
                context.drawImage(backgroundImg, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46);
            }
            oldPosition.push([x1, y1]);
            currentPositions.push([chessBoard[y2][x2], x2, y2]);

            context.drawImage(backgroundImg, 17 + 46 * x1, 15 + 46 * y1, 46, 46, 17 + 46 * x1, 15 + 46 * y1, 46, 46);
            context.drawImage(oldStep, 17 + 46 * x1, 15 + 46 * y1);
            drawChess(context, chessBoard[y2][x2], 17 + 46 * x2, 15 + 46 * y2);
            context.drawImage(currentStep, 17 + 46 * x2, 15 + 46 * y2);
            previousMoves.push(chess);
            previousMoves.push(chessPrevious);
            moveIndex++;
            $('#move' + (moveIndex - 1).toString()).css('background', '#338FFF');
            var scroller = document.getElementById('moveList');
            if (moveIndex != 1 && (moveIndex - scroller.scrollTop / 18) > 14)
                scroller.scrollTop += 18;
        });
        $('#' + backwardId).click(function () {
            if (moveIndex <= 0 || moveList.length == 0)
                return;
            $('#move' + (moveIndex - 1).toString()).css('background', 'initial');
            moveIndex--;
            $('#move' + (moveIndex - 1).toString()).css('background', '#338FFF');
            var scroller = document.getElementById('moveList');
            if ((scroller.scrollTop / 18 - moveIndex) > -14)
            {
                scroller.scrollTop -= 18;
            }
            var current = currentPositions.pop();
            if (currentPositions.length > 0) {
                current = currentPositions[currentPositions.length - 1];
                context.drawImage(currentStep, 17 + 46 * current[1], 15 + 46 * current[2]);
            }
            var currentPosition = previousMoves.pop();
            var previousPosition = previousMoves.pop();
            var a = moveList[moveIndex];
            var x1 = parseInt(a[2]);
            var y1 = parseInt(a[3]);
            var x2 = parseInt(a[0]);
            var y2 = parseInt(a[1]);
            chessBoard[y1][x1] = currentPosition;
            chessBoard[y2][x2] = previousPosition;
            var temp = oldPosition.pop();
            var oldX = temp[0];
            var oldY = temp[1];
            context.drawImage(backgroundImg, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46);
            if (oldPosition.length > 0) {
                oldX = oldPosition[oldPosition.length - 1][0];
                oldY = oldPosition[oldPosition.length - 1][1];
                context.drawImage(oldStep, 17 + 46 * oldX, 15 + 46 * oldY);
            }
            if (currentPosition.indexOf('_') != -1)
                if (currentPosition[1] > 'A' && currentPosition[1] < 'Z')
                    context.drawImage(hiddenRed, 17 + 46 * x1, 15 + 46 * y1);
                else if (currentPosition[1] > 'a' && currentPosition[1] < 'z')
                    context.drawImage(hiddenBlue, 17 + 46 * x1, 15 + 46 * y1);
                else {
                }
            else if (currentPosition == '0')
                context.drawImage(backgroundImg, 17 + 46 * x1, 15 + 46 * y1, 46, 46, 17 + 46 * x1, 15 + 46 * y1, 46, 46);
            else
                drawChess(context, currentPosition, 17 + 46 * x1, 15 + 46 * y1);

            if (previousPosition.indexOf('_') != -1)
                if (previousPosition[1] > 'A' && previousPosition[1] < 'Z')
                    context.drawImage(hiddenRed, 17 + 46 * x2, 15 + 46 * y2);
                else if (previousPosition[1] > 'a' && previousPosition[1] < 'z')
                    context.drawImage(hiddenBlue, 17 + 46 * x2, 15 + 46 * y2);
                else {
                }
            else
                drawChess(context, previousPosition, 17 + 46 * x2, 15 + 46 * y2);
        });
        context.drawImage(backgroundImg, 0, 0);
        initialize(loaded, loaded2, context, position, moveList);
        $('.moveText').click(function (e) {
            var id = parseInt(e.target.id.substring(4, e.target.id.length)) + 1;
            if (id > moveIndex)
                for (i = 0; i < id - moveIndex; ++i)
                {                   
                    setTimeout(function () {
                        forwardMove(context, moveList);
                    }, 100);
                }
            else if (id < moveIndex)
                for (i = 0; i < moveIndex - id; ++i)
                    setTimeout(function () {
                        backwardMove(context, moveList);
                    }, 100);
        });
    }
};
x.src = baseUrl+"/web/003/bluechariot.png";
p.src = baseUrl+"/web/003/bluecannon.png";
m.src = baseUrl+"/web/003/bluehorse.png";
c.src = baseUrl+"/web/003/bluesoldier.png";
s.src = baseUrl+"/web/003/blueadvisor.png";
t.src = baseUrl+"/web/003/blueelephant.png";
g.src = baseUrl+"/web/003/bluegeneral.png";
hiddenBlue.src = baseUrl+"/web/003/bluehidden.png";
X.src = baseUrl+"/web/003/redchariot.png";
P.src = baseUrl+"/web/003/redcannon.png";
M.src = baseUrl+"/web/003/redhorse.png";
C.src = baseUrl+"/web/003/redsoldier.png";
S.src = baseUrl+"/web/003/redadvisor.png";
T.src = baseUrl+"/web/003/redelephant.png";
G.src = baseUrl+"/web/003/redgeneral.png";
oldStep.src = baseUrl+"/web/003/old_step_2.png";
currentStep.src = baseUrl+"/web/003/old_step_1.png";
hiddenRed.src = baseUrl+"/web/003/redhidden.png";
H.src = hiddenRed.src;
h.src = hiddenBlue.src;
backgroundImg.src = baseUrl+"/web/003/board.png";

function initialize(loaded, loaded2, context, position, moveList) {
    if (loaded < 5 || loaded2 < 1)
        return;
    
    drawInitialChessBoard(context, position);
    if (moveList == null || moveList == "" || moveList.length == 0) {
        $('#moveList').hide();
        $('#' + forwardId).hide();
        $('#' + backwardId).hide();
        return;
    }
    else
        initMoveListBoard(moveList);
}
function drawInitialChessBoard(context, position) {
    
    for (index = 0; index < 10; ++index)
    {
        value = position[index];
        
        var pos = 0;
        for (i = 0; i < value.length; ++i) {
            if (value[i] >= '0' && value[i] <= '9')
            {
                pos += parseInt(value[i]);
                continue;
            }
            
            isNormal = 0;
            if (isNormal == 0) {
                
                switch (value[i]) {
                    case 'x':
                    case 'p':
                    case 'm':
                    case 'c':
                    case 's':
                    case 't':
                    case 'h':
                        chessBoard[index][pos] = '_' + value[i];
                        context.drawImage(hiddenBlue, 17 + 46 * pos, 15 + 46 * index);
                        pos++;
                        break;
                    case 'X':
                    case 'P':
                    case 'M':
                    case 'C':
                    case 'S':
                    case 'T':
                    case 'H':
                        chessBoard[index][pos] = '_' + value[i];
                        context.drawImage(hiddenRed, 17 + 46 * pos, 15 + 46 * index);
                        pos++;
                        break;
                    case 'G':
                        chessBoard[index][pos] = value[i];
                        context.drawImage(G, 17 + 46 * pos, 15 + 46 * index);
                        pos++;
                        break;
                    case 'g':
                        chessBoard[index][pos] = value[i];
                        context.drawImage(g, 17 + 46 * pos, 15 + 46 * index);
                        pos++;
                        break;
                }
            }
            else if (isNormal == 1) {
                var object = convertChessName(value[i]);
                chessBoard[index][pos] = object;
                if (object.indexOf('_') > -1 && object[1] > 'A' && object[1] < 'Z')
                    drawChess(context, 'H', 17 + 46 * pos, 15 + 46 * index);
                else if (object.indexOf('_') > -1 && object[1] > 'a' && object[1] < 'z')
                    drawChess(context, 'h', 17 + 46 * pos, 15 + 46 * index);
                else
                    drawChess(context, object, 17 + 46 * pos, 15 + 46 * index);
                pos++;
            }
        }
    }
}


function initChessBoard() {
    chessBoard = null;
    chessBoard = new Array(10)
    for (var i = 0; i < 10; i++) {
        chessBoard[i] = new Array(9);
        for (var j = 0; j < 9; j++) {
            chessBoard[i][j] = '0';
        }
    }
}
function drawChess(context, name, posX, posY) {
    console.log(posX);
    console.log(posY);
    console.log("------");
    switch (name) {
        case 'x':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(x, posX, posY);
            break;
        case 'p':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(p, posX, posY);
            break;
        case 'm':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(m, posX, posY);
            break;
        case 'c':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(c, posX, posY);
            break;
        case 's':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(s, posX, posY);
            break;
        case 'g':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(g, posX, posY);
            break;
        case 't':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(t, posX, posY);
            break;
        case 'h':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(h, posX, posY);
            break;
        case 'X':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(X, posX, posY);
            break;
        case 'P':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(P, posX, posY);
            break;
        case 'M':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(M, posX, posY);
            break;
        case 'C':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(C, posX, posY);
            break;
        case 'S':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(S, posX, posY);
            break;
        case 'G':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(G, posX, posY);
            break;
        case 'T':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(T, posX, posY);
            break;
        case 'H':
            context.drawImage(backgroundImg, posX, posY, 46, 46, posX, posY, 46, 46);
            context.drawImage(H, posX, posY);
            break;
    }
}
function getUrlVars() { // Read a page's GET URL variables and return them as an associative array.
    var vars = [],
            hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function initMoveListBoard(moveList) {
    var abc = $('#moveList');
    var newChessBoard = [];

    for (var i = 0; i < chessBoard.length; i++)
        newChessBoard[i] = chessBoard[i].slice();
    var x1 = parseInt(moveList[0][0]);
    var y1 = parseInt(moveList[0][1]);
    var isBlueFirst;
    if (newChessBoard[y1][x1][1] > 'a' && newChessBoard[y1][x1][1] < 'z')
        isBlueFirst = false;
    else
        isBlueFirst = true;
    for (i = 0; i < moveList.length; ++i) {
        if (isBlueFirst) {
            var x1 = parseInt(moveList[i][0]);
            var y1 = parseInt(moveList[i][1]);
            var x2 = parseInt(moveList[i][2]);
            var y2 = parseInt(moveList[i][3]);
            var res = '';
            if (i % 2 == 0) {
                res += '<span>' + Math.floor(i / 2 + 1).toString() + '.</span> ';
                if (i < 18)
                    res += '&nbsp;&nbsp;';
            }
            else
                res += '&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;';
            if (newChessBoard[y1][x1].indexOf('_') != -1)
                res += initialChessBoard[y1][x1] + (9 - x1).toString();
            else
                res += newChessBoard[y1][x1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (9 - x1).toString();
            if (y2 < y1)
                res += '.';
            else if (y2 > y1)
                res += '/';
            else
                res += '-';
            if (newChessBoard[y1][x1].indexOf('_') != -1) {
                var initialChess = initialChessBoard[y1][x1];
                if (y1 == y2) {
                    res += (9 - x2).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (9 - x2).toString();
                }
                else if (initialChess == 'X' || initialChess == 'P' || initialChess == 'B' || initialChess == 'Tg') {
                    res += Math.abs(y1 - y2).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (9 - x1).toString();
                }
                else {
                    res += (9 - x2).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (9 - x2).toString();
                }
            }
            else
            {
                if (y1 == y2) {
                    res += (9 - x2).toString();
                }
                else if (newChessBoard[y1][x1] == 'X' || newChessBoard[y1][x1] == 'P' || newChessBoard[y1][x1] == 'C' || newChessBoard[y1][x1] == 'G') {
                    res += Math.abs(y1 - y2).toString();
                }
                else {
                    res += (9 - x2).toString();
                }
            }
            abc.append('<div class ="moveText" style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;cursor:pointer;" id = "move' + i.toString() + '">' + res + '</div>');
            isBlueFirst = !isBlueFirst;
        }
        else {
            var x1 = parseInt(moveList[i][0]);
            var y1 = parseInt(moveList[i][1]);
            var x2 = parseInt(moveList[i][2]);
            var y2 = parseInt(moveList[i][3]);
            var res = '';
            if (i % 2 == 0) {
                res += '<span>' + Math.floor(i / 2 + 1).toString() + '.</span> ';
                if (i < 18)
                    res += '&nbsp;&nbsp;';
            }
            else
                res += '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            if (newChessBoard[y1][x1].indexOf('_') != -1)
                res += initialChessBoard[y1][x1] + (x1 + 1).toString();
            else
                res += newChessBoard[y1][x1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (x1 + 1).toString();
            if (y2 > y1)
                res += '.';
            else if (y2 < y1)
                res += '/';
            else
                res += '-';
            if (newChessBoard[y1][x1].indexOf('_') != -1) {
                var initialChess = initialChessBoard[y1][x1];
                if (y1 == y2) {
                    res += (x2 + 1).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (x2 + 1).toString();
                }
                else if (initialChess == 'X' || initialChess == 'P' || initialChess == 'B' || initialChess == 'Tg') {
                    res += Math.abs(y1 - y2).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (x1 + 1).toString();
                }
                else {
                    res += (x2 + 1).toString();
                    res += '&nbsp;&nbsp;&nbsp;' + newChessBoard[y1][x1][1].toUpperCase().replace('G', 'Tg').replace('C', 'B') + (x2 + 1).toString();
                }
            }
            else
            {
                if (y1 == y2) {
                    res += (x2 + 1).toString();
                }
                else if (newChessBoard[y1][x1] == 'x' || newChessBoard[y1][x1] == 'p' || newChessBoard[y1][x1] == 'c' || newChessBoard[y1][x1] == 'g') {
                    res += Math.abs(y1 - y2).toString();
                }
                else {
                    res += (x2 + 1).toString();
                }
            }
            abc.append('<div class ="moveText" style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;cursor:pointer;" id = "move' + i.toString() + '">' + res + '</div>');
            isBlueFirst = !isBlueFirst;
        }
        if (newChessBoard[y1][x1].indexOf('_') != -1)
        {
            newChessBoard[y2][x2] = newChessBoard[y1][x1][1];
            newChessBoard[y1][x1] = '0';
        }
        else
        {
            newChessBoard[y2][x2] = newChessBoard[y1][x1];
            newChessBoard[y1][x1] = '0';
        }
    }
}
function forwardMove(context, moveList) {
    if (moveList.length <= moveIndex)
        return;
    $('#move' + (moveIndex - 1).toString()).css('background', 'initial');
    var a = moveList[moveIndex];
    var x1 = parseInt(a[0]);
    var y1 = parseInt(a[1]);
    var x2 = parseInt(a[2]);
    var y2 = parseInt(a[3]);
    var chess = chessBoard[y1][x1];
    var chessPrevious = chessBoard[y2][x2];
    if (chess.indexOf('_') != -1)
    {
        chessBoard[y1][x1] = '0';
        chessBoard[y2][x2] = chess[1];
    }
    else
    {
        chessBoard[y1][x1] = '0';
        chessBoard[y2][x2] = chess;
    }
    if (currentPositions.length > 0) {
        currentPosition = currentPositions[currentPositions.length - 1];
        context.drawImage(backgroundImg, 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2], 46, 46, 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2], 46, 46);
        drawChess(context, currentPosition[0], 17 + 46 * currentPosition[1], 15 + 46 * currentPosition[2]);
    }

    if (oldPosition.length > 0) {
        var oldX = oldPosition[oldPosition.length - 1][0];
        var oldY = oldPosition[oldPosition.length - 1][1];
        context.drawImage(backgroundImg, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46);
    }
    oldPosition.push([x1, y1]);
    currentPositions.push([chessBoard[y2][x2], x2, y2]);

    context.drawImage(backgroundImg, 17 + 46 * x1, 15 + 46 * y1, 46, 46, 17 + 46 * x1, 15 + 46 * y1, 46, 46);
    context.drawImage(oldStep, 17 + 46 * x1, 15 + 46 * y1);
    drawChess(context, chessBoard[y2][x2], 17 + 46 * x2, 15 + 46 * y2);
    context.drawImage(currentStep, 17 + 46 * x2, 15 + 46 * y2);
    previousMoves.push(chess);
    previousMoves.push(chessPrevious);

    moveIndex++;
    $('#move' + (moveIndex - 1).toString()).css('background', '#338FFF');
}
function backwardMove(context, moveList) {
    if (moveIndex <= 0 || moveList.length == 0)
        return;
    $('#move' + (moveIndex - 1).toString()).css('background', 'initial');
    moveIndex--;
    $('#move' + (moveIndex - 1).toString()).css('background', '#338FFF');
    var current = currentPositions.pop();
    if (currentPositions.length > 0) {
        current = currentPositions[currentPositions.length - 1];
        context.drawImage(currentStep, 17 + 46 * current[1], 15 + 46 * current[2]);
    }

    var currentPosition = previousMoves.pop();
    var previousPosition = previousMoves.pop();
    var a = moveList[moveIndex];
    var x1 = parseInt(a[2]);
    var y1 = parseInt(a[3]);
    var x2 = parseInt(a[0]);
    var y2 = parseInt(a[1]);
    var y2 = parseInt(a[1]);
    chessBoard[y1][x1] = currentPosition;
    chessBoard[y2][x2] = previousPosition;

    if (currentPosition.indexOf('_') != -1)
        if (currentPosition[1] > 'A' && currentPosition[1] < 'Z')
            context.drawImage(hiddenRed, 17 + 46 * x1, 15 + 46 * y1);
        else if (currentPosition[1] > 'a' && currentPosition[1] < 'z')
            context.drawImage(hiddenBlue, 17 + 46 * x1, 15 + 46 * y1);
        else {
        }
    else if (currentPosition == '0')
        context.drawImage(backgroundImg, 17 + 46 * x1, 15 + 46 * y1, 46, 46, 17 + 46 * x1, 15 + 46 * y1, 46, 46);
    else
        drawChess(context, currentPosition, 17 + 46 * x1, 15 + 46 * y1);

    var temp = oldPosition.pop();
    var oldX = temp[0];
    var oldY = temp[1];
    context.drawImage(backgroundImg, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46, 17 + 46 * oldX, 15 + 46 * oldY, 46, 46);
    if (oldPosition.length > 0) {
        oldX = oldPosition[oldPosition.length - 1][0];
        oldY = oldPosition[oldPosition.length - 1][1];
        context.drawImage(oldStep, 17 + 46 * oldX, 15 + 46 * oldY);
    }

    if (previousPosition.indexOf('_') != -1)
        if (previousPosition[1] > 'A' && previousPosition[1] < 'Z')
            context.drawImage(hiddenRed, 17 + 46 * x2, 15 + 46 * y2);
        else if (previousPosition[1] > 'a' && previousPosition[1] < 'z')
            context.drawImage(hiddenBlue, 17 + 46 * x2, 15 + 46 * y2);
        else {
        }
    else
        drawChess(context, previousPosition, 17 + 46 * x2, 15 + 46 * y2);
}
function convertChessName(chessName) {
    switch (chessName) {
        case 'q':
            return '_x';
        case 'w':
            return '_p';
        case 'e':
            return '_m';
        case 'r':
            return '_c';
        case 'y':
            return '_s';
        case 'u':
            return '_t';
        case 'Q':
            return '_X';
        case 'W':
            return '_P';
        case 'E':
            return '_M';
        case 'R':
            return '_C';
        case 'Y':
            return '_S';
        case 'U':
            return '_T';
        default:
            return chessName;
    }
}

