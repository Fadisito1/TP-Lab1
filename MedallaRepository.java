package com.ejemplo.olimpicos.repository;

import com.ejemplo.olimpicos.model.Medalla;
import org.springframework.data.jpa.repository.JpaRepository;

public interface MedallaRepository extends JpaRepository<Medalla, Long> {
}