class RandomDifficultyEnemyFactory implements EnemyFactory {
    createEnemy(); Entity {

    }
}

class RandomEnemyFactory implements EnemyFactory {
    createEnemy(); Entity {

    }
}

class Boo implements Entity{

}

class Kooba implements Entity{
    
}

class Goomba implements Entity{
    
}

interface Entity {
    updateLogic(); void
}

class GoombalFactory implements EnemyFactory {
    createEnemy(); Entity {

    }
}

interface EnemyFactory {
    createEnemy(); Entity
}

