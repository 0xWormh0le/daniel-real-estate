import express from 'express';
import {
    getFavorites,
    addToFavorites,
    deleteFavorite
} from 'controllers/favoriteController';


const router = express.Router();

router.get("/", getFavorites);

router.post("/", addToFavorites);

router.delete("/:id", deleteFavorite);

export default router;
