# ERPOS Documentation

Document: Repair Problems

Version: 1.0

Status: Draft

Last Updated: 2026-08-07

Author: Md. Anisur Rahman

---

# Purpose

Repair Problems define the list of service issues available for each Device Type.

---

# Examples

## Mobile

- Charging Issue
- Display Issue
- Camera Issue
- Touch Issue

## Laptop

- No Display
- Keyboard Issue
- SSD Failure
- Battery Issue

---

# Relationships

Device Type

↓

Repair Problem

↓

Repair Ticket

---

# Fields

- Device Type
- Name
- Slug
- Description
- Status
- Sort Order

---

# Business Rules

- Every Repair Problem belongs to one Device Type.
- Slug must be unique.
- Repair Problems can be enabled or disabled.
- Only active Repair Problems should be available when creating a Repair Ticket.
