// Get the necessary elements from the HTML
const cells = document.querySelectorAll('.cell');
const status = document.getElementById('status');
const resetButton = document.getElementById('reset');



let currentPlayer = 'X';
let gameBoard = ['', '', '', '', '', '', '', '', ''];
let gameActive = true;


function handleCellClick(event) {
    const cell = event.target;
    const index = parseInt(cell.getAttribute('data-index'));
  
    // Check if the clicked cell is already filled or the game is over
    if (gameBoard[index] !== '' || !gameActive) {
      return;
    }
  
    // Update game state
    gameBoard[index] = currentPlayer;
    cell.textContent = currentPlayer;
    cell.classList.add(currentPlayer);
  
    // Check for a winning condition
    if (checkWin()) {
      endGame(false);
    } else if (checkDraw()) {
      endGame(true);
    } else {
      togglePlayer();
    }
  }
  
  // Function to toggle the current player
  function togglePlayer() {
    currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
    status.textContent = `Player ${currentPlayer}'s turn`;
  }
  
  // Function to check for a winning condition
  function checkWin() {
    const winningCombinations = [
      [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
      [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
      [0, 4, 8], [2, 4, 6] // Diagonals
    ];
  
    for (const combination of winningCombinations) {
      const [a, b, c] = combination;
      if (gameBoard[a] !== '' && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
        return true;
      }
    }
  
    return false;
  }
  
  function checkDraw() {
    return gameBoard.every(cell => cell !== '');
  }
  
  // Function to end the game
  function endGame(draw) {
    gameActive = false;
    status.textContent = draw ? 'It\'s a draw!' : `Player ${currentPlayer} wins!`;
    cells.forEach(cell => cell.removeEventListener('click', handleCellClick));
  }
  
  // Function to reset the game
  function resetGame() {
    currentPlayer = 'X';
    gameBoard = ['', '', '', '', '', '', '', '', ''];
    gameActive = true;
    status.textContent = `Player ${currentPlayer}'s turn`;
    cells.forEach(cell => {
      cell.textContent = '';
      cell.classList.remove('X', 'O');
      cell.addEventListener('click', handleCellClick);
    });
  }

// Event listeners
cells.forEach(cell => cell.addEventListener('click', handleCellClick));
resetButton.addEventListener('click', resetGame);


const toggleDarkModeButton = document.getElementById('toggleDarkMode');  
toggleDarkModeButton.addEventListener('click',function () {
    document.body.classList.toggle("dark-mode");
});

