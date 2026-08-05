# ERPOS Documentation

Document: Table Specifications
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Table: roles

## Purpose

Stores all user roles used throughout the system.

Examples:

- Owner
- Admin
- Receptionist
- Technician
- Cashier

---

## Columns

| Column | Type | Nullable | Unique | Description |
|---------|------|----------|--------|-------------|
| id | BIGINT | No | Yes (PK) | Primary Key |
| name | VARCHAR(100) | No | Yes | Role name |
| slug | VARCHAR(100) | No | Yes | System identifier |
| description | TEXT | Yes | No | Role description |
| status | BOOLEAN | No | No | Active / Inactive |
| created_at | TIMESTAMP | No | No | Created time |
| updated_at | TIMESTAMP | No | No | Updated time |

---

## Default Roles

- Owner
- Admin
- Receptionist
- Technician
- Cashier

---

## Notes

- Role names must be unique.
- Slug will be used internally.
- A role can be assigned to multiple users.
